// Cette fonction s'exécute dès que la page est chargée
document.addEventListener("DOMContentLoaded", function() {
    
    // On récupère l'élément où on veut mettre la navbar
    const navPlaceholder = document.getElementById("navbar-placeholder");

    // On utilise fetch pour aller lire le fichier navbar.html
    fetch("navbar.html")
        .then(response => response.text())
        .then(data => {
            navPlaceholder.innerHTML = data;
        })
        .catch(error => console.error('Erreur lors du chargement du menu :', error));
});