const dropdownItems = document.querySelectorAll('.dropdown-item');
const allContents = document.querySelectorAll('.dropdown-content');

dropdownItems.forEach(item => {
    item.addEventListener('click', function (event) {
        event.preventDefault();

        const nama = item.textContent.trim();

        // Sembunyikan semua konten
        allContents.forEach(content => {
            content.style.display = 'none';
        });

        // Tampilkan konten yang sesuai
        const targetContent = document.getElementById(`content-${nama}`);
        if (targetContent) {
            targetContent.style.display = 'block';
        } else {
            console.warn(`Konten untuk ${nama} tidak ditemukan.`);
        }
    });
});
