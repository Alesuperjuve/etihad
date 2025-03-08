<?php

namespace App\Http\Controllers;

use Smalot\PdfParser\Parser;
use App\Models\Airport;
use Illuminate\Http\Request;

class TesekstrakPDFController extends Controller
{
    public function index()
    {
        return view('tesekstrak.index');
    }

    public function extract(Request $request)
    {
        try {
            // Variabel untuk menentukan jenis pesan error
            $pesanError = 1; // Ubah menjadi 1 jika ingin menampilkan error spesifik

            // Validasi file upload sebelum diproses
            $request->validate([
                'pdf_file' => 'required|mimes:pdf|max:20480', // Maksimal 20MB
            ]);

            // Simpan sementara file PDF
            $pdf = $request->file('pdf_file');
            $pdfPath = $pdf->getPathname();

            // Buka PDF dengan Smalot\PdfParser
            $parser = new Parser();
            $pdfDocument = $parser->parseFile($pdfPath);

            if (!$pdfDocument) {
                throw new \Exception('Gagal membaca file PDF!');
            }

            // Ambil metadata PDF
            $details = $pdfDocument->getDetails();
            if (empty($details) || !is_array($details)) {
                throw new \Exception('Metadata PDF tidak ditemukan atau tidak dapat diproses!');
            }

            if (!isset($details['Producer'], $details['Title'], $details['Keywords'])) {
                throw new \Exception('Metadata PDF tidak lengkap! Pastikan PDF memiliki Producer, Title, dan Keywords.');
            }

            // Path credentials Adobe
            $credentialPath = base_path('pdfservices-api-credentials.json');

            // Simpan file PDF ke storage Laravel
            $pdfStoragePath = storage_path('app/pdfs/' . $pdf->hashName());
            $pdf->storeAs('pdfs', $pdf->hashName());

            if (!file_exists($pdfStoragePath) || !file_exists($credentialPath)) {
                throw new \Exception('File PDF atau credentials tidak ditemukan!');
            }

            // Menjalankan script Python dengan shell_exec()
            $command = escapeshellcmd("python " . base_path('extract.py') . " " . $pdfStoragePath . " " . $credentialPath . " 2>&1");
            $output = shell_exec($command);

            if (!$output) {
                throw new \Exception('Ekstraksi gagal! Tidak ada output dari Python script.');
            }

            // Decode output JSON
            $jsonOutput = json_decode($output, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception('Output Python bukan JSON yang valid! Error: ' . json_last_error_msg());
            }

            // Ubah format JSON agar sesuai dengan yang diinginkan
            $formattedJson = $this->formatJsonOutput($jsonOutput);

            // Simpan hasil ekstraksi ke MongoDB
            $airport = Airport::create($formattedJson);

            return view('tesekstrak.hasil', [
                'formattedJson' => $formattedJson,
                'message' => 'Data berhasil dimasukkan ke database AIRPORT!',
                'error' => false
            ]);

        } catch (\Exception $e) {
            // Jika $pesanError = 0, tampilkan pesan error umum
            $message = ($pesanError === 0) ? 'File PDF tidak sesuai standar' : 'Terjadi kesalahan: ' . $e->getMessage();
            
            return view('tesekstrak.hasil', [
                'formattedJson' => null,
                'message' => $message,
                'error' => true
            ]);
        }
    }

    


    /**
     * Fungsi untuk mengubah format JSON hasil ekstraksi menjadi format yang diinginkan
     */
    private function formatJsonOutput($jsonOutput)
    {
        $texts = $jsonOutput['texts'] ?? [];
        $content = [];
        $documentInfo = [
            'CODE' => '',
            'NAME' => '',
            'AUTHOR' => '',
            'DATE' => ''
        ];

        // Parsing metadata
        foreach ($texts as $index => $text) {
            if (str_starts_with($text, "Document Name:")) {
                $documentInfo['NAME'] = trim(str_replace("Document Name:", "", $text));
            } elseif (str_starts_with($text, "Created By:")) {
                $documentInfo['AUTHOR'] = trim(str_replace("Created By:", "", $text));
            } elseif (str_starts_with($text, "Document Code:")) {
                $documentInfo['CODE'] = trim(str_replace("Document Code:", "", $text));
            } elseif (str_starts_with($text, "Creation Date:") || str_starts_with($text, "Date:")) {
                // Ambil hanya tanggalnya, tanpa waktu
                $fullDate = trim(str_replace(["Creation Date:", "Date:"], "", $text));
                $documentInfo['DATE'] = explode(" ", $fullDate)[0]; // Ambil bagian tanggalnya saja
            }
        }

        // Parsing tabel bandara
        for ($i = 0; $i < count($texts); $i++) {
            if (is_numeric(trim($texts[$i]))) {
                $airport = [
                    'AIRPORT_NAME' => $texts[$i + 1] ?? '',
                    'CITY' => $texts[$i + 2] ?? '',
                    'IATA' => $texts[$i + 3] ?? '',
                    'ICAO' => $texts[$i + 4] ?? '',
                    'DESCRIPTION' => $texts[$i + 5] ?? ''
                ];
                $content[] = $airport;
                $i += 5; // Lompat ke entri berikutnya
            }
        }

        return [
            'CODE' => $documentInfo['CODE'],
            'PAGE' => 1,
            'NAME' => $documentInfo['NAME'],
            'AUTHOR' => $documentInfo['AUTHOR'],
            'DATE' => $documentInfo['DATE'],
            'CONTENT' => $content
        ];
    }



    /**
     * Validasi metadata PDF sesuai ketentuan
     */
    private function validatePdfMetadata($details)
    {
        // Pastikan semua key metadata tersedia
        if (!isset($details['Producer']) || !isset($details['Title']) || !isset($details['Keywords'])) {
            return false;
        }

        // Validasi Producer: harus mengandung "PyFPDF"
        if (stripos($details['Producer'], 'PyFPDF') === false) {
            return false;
        }

        // Validasi Title: harus mengandung "International Airports in [negara]"
        if (!preg_match('/^International Airports in [\w\s]+$/', $details['Title'])) {
            return false;
        }

        // Validasi Keywords: harus memiliki format "Airports, [negara], PDF, [32 karakter]"
        if (!preg_match('/^Airports, [\w\s]+, PDF, [A-F0-9]{32}$/', $details['Keywords'])) {
            return false;
        }

        return true;
    }
}
