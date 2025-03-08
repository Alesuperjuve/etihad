document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchInput");
    const table = document.querySelector("table tbody");
    const rows = Array.from(table.getElementsByTagName("tr"));
    const paginationContainer = document.getElementById("pagination");

    let currentPage = 1;
    const rowsPerPage = 5; // Jumlah data per halaman

    function filterTable() {
        const searchTerm = searchInput.value.toLowerCase();
        rows.forEach(row => {
            const rowText = row.textContent.toLowerCase();
            row.style.display = rowText.includes(searchTerm) ? "" : "none";
        });
        paginateTable();
    }

    function paginateTable() {
        let filteredRows = rows.filter(row => row.style.display !== "none");
        let totalPages = Math.ceil(filteredRows.length / rowsPerPage);
        paginationContainer.innerHTML = "";

        if (totalPages > 1) {
            for (let i = 1; i <= totalPages; i++) {
                let pageButton = document.createElement("button");
                pageButton.textContent = i;
                pageButton.className = "btn btn-primary mx-1";
                pageButton.onclick = function () {
                    currentPage = i;
                    displayPage(filteredRows, i);
                };
                paginationContainer.appendChild(pageButton);
            }
        }
        displayPage(filteredRows, currentPage);
    }

    function displayPage(rows, page) {
        let start = (page - 1) * rowsPerPage;
        let end = start + rowsPerPage;

        rows.forEach((row, index) => {
            row.style.display = index >= start && index < end ? "" : "none";
        });
    }

    searchInput.addEventListener("input", filterTable);
    paginateTable();
});
