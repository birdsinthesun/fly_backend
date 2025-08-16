
document.addEventListener("DOMContentLoaded", () => {
  // Ziel-Container finden
  const form = document.querySelector("#main > .content > form");
console.log('test');
  if (form) {
    // Button erstellen
    const btn = document.createElement("button");
    btn.id = "toggle_filter_area";
    btn.textContent = "Filter"; // Beschriftung nach Wunsch

    // Button als erstes Kind ins form prependen
    form.prepend(btn);

    // Klick-Event anhängen
    btn.addEventListener("click", (e) => {
      e.preventDefault(); // verhindert evtl. Submit

      btn.classList.toggle("open");
      form.classList.toggle("open");
    });
  }
});

