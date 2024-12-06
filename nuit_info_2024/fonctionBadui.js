function styleToRadio(body) {
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
const compteur = 0;

document.addEventListener("keydown", (event) => {
  if (event.ctrlKey && event.shiftKey && event.key === "T") {
    compteur += 1;
  }
  switch (compteur) {
    case 1:
      const body = document.getElementById("body");

      styleToRadio(body, navbar);
      break;

      case 2 :
        

    default:
      break;
  }
  if (event.key === "ArrowLeft") {
    message.textContent = "Flèche gauche appuyée";
  } else if (event.key === "ArrowRight") {
    styleToInfrarouge();
    message.textContent = "Flèche droite appuyée";
  } else if (event.key === "ArrowDown") {
    styleToNocturne();
    message.textContent = "Flèche bas appuyée";
  } else {
    styleToBasique();
    message.textContent = "Autre touche appuyée";
  }
});
