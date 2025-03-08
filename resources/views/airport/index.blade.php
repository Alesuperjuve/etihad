@extends('layouts.app')

@section('content')
    @if(isset($message))
        <div class="alert alert-danger">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">International Airport Data</h4>
            
            <!-- Input Search -->
            <input type="text" id="searchInput" class="form-control mb-3" placeholder="Search airport...">

            <!-- Tabel Data -->
            <x-airport-component />

            <!-- Kontainer Pagination -->
            <div id="pagination" class="mt-3"></div>

        </div>
    </div>

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

@endsection

@section('scripts')

    @vite(['resources/js/search-data-airport.js'])

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

@endsection
