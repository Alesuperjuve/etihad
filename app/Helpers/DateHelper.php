<?php

if (!function_exists('formatTanggal')) {
    function formatTanggal($date)
    {
        if (!$date) return '-'; // Jika tanggal kosong, tampilkan '-'
        
        $bulan = [
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember'
        ];

        $tanggalArray = explode('-', $date); // Pecah "2025-02-27" menjadi ['2025', '02', '27']
        if (count($tanggalArray) != 3) return '-'; // Validasi format

        return ltrim($tanggalArray[2], '0') . ' ' . $bulan[$tanggalArray[1]] . ' ' . $tanggalArray[0]; 
        // Output: "27 Februari 2025"
    }
}
