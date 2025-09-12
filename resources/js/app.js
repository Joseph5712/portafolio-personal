document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".repo-card");
    const toggleBtn = document.getElementById("toggleButton");
    let showingAll = false;

    function updateCards() {
        cards.forEach((card, index) => {
            if (!showingAll && index >= 6) {
                card.classList.add("hidden");
            } else {
                card.classList.remove("hidden");
            }
        });
        toggleBtn.textContent = showingAll ? "Mostrar menos" : "Mostrar más";
    }

    toggleBtn.addEventListener("click", () => {
        showingAll = !showingAll;
        updateCards();
    });

    updateCards(); // inicial
});
