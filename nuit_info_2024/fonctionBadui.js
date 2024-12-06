function styleToRadio(body, navbar, footer) {
  body.classList.toggle("radio");
  navbar.classList.toggle("radio");
  footer.classList.toggle("radio");
}

function styleToInfrarouge() {
  navbar.classList.toggle("infrarouge");
  footer.classList.toggle("infrarouge");
  body.classList.toggle("infrarouge");
}

function styleToNocturne() {
  body.classList.toggle("nocturne");
  navbar.classList.toggle("nocturne");
  footer.classList.toggle("nocturne");
}

function styleToBasique() {
  body.classList.toggle("basique");
  navbar.classList.toggle("basique");
  footer.classList.toggle("basique");
}

let compteur = 0;

document.addEventListener("keydown", (event) => {
  const body = document.body;
  const navbar = document.querySelector(".navbar");
  const footer = document.querySelector(".footer");

  if (event.altKey && event.key === "h") {
    compteur += 1;
    if (compteur > 4) {
      compteur = 1;
    }
    switch (compteur) {
      case 1:
        styleToRadio(body, navbar, footer);
        break;
      case 2:
        styleToRadio(body, navbar, footer);
        styleToInfrarouge();
        break;
      case 3:
        styleToInfrarouge();
        styleToNocturne();
        break;
      case 4:
        styleToNocturne();
        break;
    }
  }
});
