
document.addEventListener("DOMContentLoaded", () => {
  // Ziel-Container finden
  const form = document.querySelector("#main > .content > form");
 const wrapper = document.querySelector("#main > .content");

  if (form) {
    // Button erstellen
    const btn = document.createElement("button");
    btn.id = "toggle_filter_area";
    //btn.textContent = "Filter"; // Beschriftung nach Wunsch

    // Button als erstes Kind ins form prependen
    wrapper.prepend(btn);

    // Klick-Event anhängen
    btn.addEventListener("click", (e) => {
      e.preventDefault(); // verhindert evtl. Submit

      btn.classList.toggle("open");
      form.classList.toggle("open");
    });
  }
});

