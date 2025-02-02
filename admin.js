document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll(".card");

  function checkVisibility() {
    const windowHeight = window.innerHeight;

    cards.forEach((card) => {
      const cardTop = card.getBoundingClientRect().top;

      if (cardTop < windowHeight - 100) {
        card.classList.add("visible");
      }
    });
  }

  window.addEventListener("scroll", checkVisibility);
  checkVisibility();
});
