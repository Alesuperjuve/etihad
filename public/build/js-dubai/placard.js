// Client-side search function
function filterTable() {
    const input = document.getElementById("searchInput").value.toLowerCase();
    const table = document.getElementById("placardTable");
    const rows = table.getElementsByTagName("tr");

    for (let i = 1; i < rows.length; i++) {
        const cells = rows[i].getElementsByTagName("td");
        let rowContainsSearchTerm = false;

        for (let j = 0; j < cells.length; j++) {
            if (cells[j].innerText.toLowerCase().includes(input)) {
                rowContainsSearchTerm = true;
                break;
            }
        }

        rows[i].style.display = rowContainsSearchTerm ? "" : "none";
    }
}

// Client-side pagination function
function paginateTable(pageSize, currentPage) {
    const table = document.getElementById("placardTable");
    const rows = table.getElementsByTagName("tr");
    const totalRows = rows.length - 1; // Exclude header row
    const totalPages = Math.ceil(totalRows / pageSize);

    // Hide all rows except for the header
    for (let i = 1; i <= totalRows; i++) {
        rows[i].style.display = "none";
    }

    // Show only the rows for the current page
    const start = (currentPage - 1) * pageSize + 1;
    const end = start + pageSize;

    for (let i = start; i < end && i <= totalRows; i++) {
        rows[i].style.display = "";
    }

    // Update pagination controls
    createPaginationControls(totalPages, currentPage);
}

function createPaginationControls(totalPages, currentPage) {
    const paginationControls = document.getElementById("paginationControls");
    paginationControls.innerHTML = ""; // Clear previous controls

    for (let i = 1; i <= totalPages; i++) {
        const button = document.createElement("button");
        button.textContent = i;
        button.className = `btn btn-secondary mx-1 ${i === currentPage ? 'active' : ''}`;
        button.addEventListener("click", () => paginateTable(10, i));
        paginationControls.appendChild(button);
    }
}

// Initial call to set up pagination on page load
document.addEventListener("DOMContentLoaded", () => {
    paginateTable(10, 1); // 10 rows per page, starting on the first page
});
