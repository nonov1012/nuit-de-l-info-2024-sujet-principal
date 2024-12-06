function styleToRadio(body) {
  navbar.classList.toggle("radio");
  body.classList.toggle("radio");
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

document.addEventListener("keydown", (event) => {
  if (event.key === "ArrowLeft") {
    styleToRadio();
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
