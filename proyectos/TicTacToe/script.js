let jugador = "X"; 
let celda = document.querySelectorAll("td");

celda.forEach(function (campo) {
  campo.addEventListener("click", function () {
    if (campo.textContent === "") {
      campo.textContent = jugador;
      campo.classList.add(jugador);
      if (ganar()) {
        alert("Gana: " + jugador);
        limpiar();
      } else if (Empate()) {
        alert("Es un empate!");
        limpiar();
      } else {
        jugador = jugador === "X" ? "O" : "X";
      }
    }
  });
});


function ganar() {
  let win = false;

  let combosGanar = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6],
  ];


  for (let combo of combosGanar) {
    if (
      celda[combo[0]].textContent === jugador &&
      celda[combo[1]].textContent === jugador &&
      celda[combo[2]].textContent === jugador
    ) {
      win = true;
      break;
    }
  }

  return win;
}


function Empate() {
  let empate = true;

  for (let campo of celda) {
    if (campo.textContent === "") {
      empate = false;
      break;
    }
  }

  return empate;
}


function limpiar() {
  celda.forEach(function (campo) {
    campo.textContent = "";
    campo.classList.remove("X", "O");
  });

  jugador = "X";
}
