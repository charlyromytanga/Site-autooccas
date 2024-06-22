
function updatePriceValue() {
    const range = document.getElementById("priceRange");
    const value = document.getElementById("priceValue");
    value.innerText = range.value + " €"; // Mettez ici votre unité de monnaie (€, $, etc.)
}

    // Initialiser la valeur affichée au chargement de la page
    document.addEventListener("DOMContentLoaded", function() {
        updatePriceValue();
    });
