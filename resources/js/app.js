
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

    if (toggleBtn) {
        toggleBtn.addEventListener("click", () => {
            showingAll = !showingAll;
            updateCards();
        });

        updateCards(); // Inicial
    }
});

document.addEventListener('DOMContentLoaded', () => {
    // Selecciona todos los enlaces internos del navbar
    const navLinks = document.querySelectorAll('a[href^="#"]');

    navLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                const elementTop = targetElement.getBoundingClientRect().top;
                const offsetPosition = window.pageYOffset + elementTop - (window.innerHeight / 2) + (targetElement.offsetHeight / 2);

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
});
