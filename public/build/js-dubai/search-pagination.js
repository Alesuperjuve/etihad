document.addEventListener("DOMContentLoaded", function () {
    function setupTable(tableId, searchInputId, paginationId) {
        const table = document.getElementById(tableId);
        const searchInput = document.getElementById(searchInputId);
        const paginationControls = document.getElementById(paginationId);
        const rows = Array.from(table.querySelectorAll("tbody tr"));
        const rowsPerPage = 10; // Set jumlah baris per halaman
        let currentPage = 1;

        function renderTable(filteredRows) {
            const start = (currentPage - 1) * rowsPerPage;
            const end = start + rowsPerPage;
            const visibleRows = filteredRows.slice(start, end);

            table.querySelector("tbody").innerHTML = "";
            visibleRows.forEach((row) => table.querySelector("tbody").appendChild(row));

            renderPagination(filteredRows.length);
        }

        function renderPagination(totalRows) {
            const totalPages = Math.ceil(totalRows / rowsPerPage);
            paginationControls.innerHTML = "";

            for (let i = 1; i <= totalPages; i++) {
                const pageButton = document.createElement("button");
                pageButton.textContent = i;
                pageButton.className = "btn btn-sm mx-1 " + (i === currentPage ? "btn-primary" : "btn-outline-primary");
                pageButton.addEventListener("click", () => {
                    currentPage = i;
                    renderTable(getFilteredRows());
                });
                paginationControls.appendChild(pageButton);
            }
        }

        function getFilteredRows() {
            const query = searchInput.value.toLowerCase();
            return rows.filter((row) => {
                return Array.from(row.cells).some((cell) => cell.textContent.toLowerCase().includes(query));
            });
        }

        // Event listener untuk search input
        searchInput.addEventListener("input", () => {
            currentPage = 1; // Reset ke halaman pertama saat search
            renderTable(getFilteredRows());
        });

        // Initial render
        renderTable(rows);
    }

    // Inisialisasi tabel
    setupTable("fontTable", "fontSearch", "paginationControlsFont");
    setupTable("partnumberTable", "partnumberSearch", "paginationControlsPart");
    setupTable("materialTable", "materialSearch", "paginationControlsMaterial");
});
