document.addEventListener("DOMContentLoaded", function() {
    const aboutLink = document.getElementById("aboutLink");
    const aboutContent = document.getElementById("aboutContent");

    aboutLink.addEventListener("click", function(event) {
        event.preventDefault(); // Menghentikan perilaku default dari link
        aboutContent.style.display = "block"; // Menampilkan konten tentang kami
    });
});
