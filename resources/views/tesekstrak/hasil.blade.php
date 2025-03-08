<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Ekstraksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 1200px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        pre {
            white-space: pre-wrap;
            word-wrap: break-word;
            background: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <!-- Tampilkan hasil ekstrak -->
    @if(isset($message))
    <div class="alert alert-danger">
        <strong>{{ $message }}</strong>
    </div>
    @endif
    <div class="container">
        <div class="col-6">
            <h5><a href="{{ url('tesekstrak') }}" class="btn btn-primary">Kembali ke halaman upload file PDF</a></h5>
        </div>
        <div class="col-6">
            <h5><a href="{{ url('airport') }}" class="btn btn-primary">Ke Halaman Airport</a></h5>
        </div>
        
        
    </div>
    @if(isset($formattedJson))
                <div class="container">
                    <h3>Hasil Ekstraksi PDF</h3>
                    <x-airport-component />
                    <div class="alert alert-success">
                        <pre>{{ json_encode($formattedJson, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) }}</pre>
                    </div>
                    
                </div>
    @endif
    
    

    <!-- Modal Bootstrap -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h3 class="modal-title text-white" id="detailModalLabel"></h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <thead class="table-primary">
                            <tr id="detailTableHead"></tr>
                        </thead>
                        <tbody id="detailTableBody"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    function showDetailModal(detailJson, docName) {
    let modalTitle = document.getElementById('detailModalLabel');
    let modalTableHead = document.getElementById('detailTableHead');
    let modalTableBody = document.getElementById('detailTableBody');

    modalTableHead.innerHTML = '';
    modalTableBody.innerHTML = '';

    // Update modal title dengan nama dokumen yang diklik
    modalTitle.textContent = docName;

    if (typeof detailJson === 'string') {
        try {
            detailJson = JSON.parse(detailJson);
        } catch (error) {
            console.error("Invalid JSON format", error);
            return;
        }
    }

    if (Array.isArray(detailJson) && detailJson.length > 0) {
        // Mapping untuk mengganti nama kolom
        let columnMapping = {
            "AIRPORT_NAME": "AIRPORT NAME",
            "CITY": "CITY",
            "IATA": "IATA",
            "ICAO": "ICAO",
            "DESCRIPTION": "DESCRIPTION"
        };

        let headers = Object.keys(detailJson[0]);

        // Tambahkan kolom NO sebagai kolom pertama
        let thNomor = document.createElement('th');
        thNomor.textContent = "NO";
        modalTableHead.appendChild(thNomor);

        headers.forEach(header => {
            let th = document.createElement('th');
            th.textContent = columnMapping[header] || header.toUpperCase(); // Gunakan mapping jika ada, jika tidak, gunakan default
            modalTableHead.appendChild(th);
        });

        // Isi data ke dalam tabel dengan nomor urut
        detailJson.forEach((item, index) => {
            let tr = document.createElement('tr');

            // Tambahkan nomor urut
            let tdNomor = document.createElement('td');
            tdNomor.textContent = index + 1;
            tr.appendChild(tdNomor);

            headers.forEach(header => {
                let td = document.createElement('td');
                td.textContent = item[header];
                tr.appendChild(td);
            });

            modalTableBody.appendChild(tr);
        });
    } else {
        modalTableBody.innerHTML = '<tr><td colspan="100%" class="text-center">No data available</td></tr>';
    }

    var detailModal = new bootstrap.Modal(document.getElementById('detailModal'));
    detailModal.show();
}

</script>
</body>


</html>
