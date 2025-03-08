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
            th.textContent = columnMapping[header] || header.toUpperCase();
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

// ✅ Ekspor fungsi agar bisa diakses di luar file
export { showDetailModal };
