const cuadro = document.getElementById("cuadro");
const contenedor = document.getElementById("contenedor");
const infoPosicion = document.getElementById("infoPosicion");
const infoColor = document.getElementById("infoColor");
const infoRaton = document.getElementById("infoRaton");

const anchoContenedor = 500;
const altoContenedor = 400;

let posX = 225;
let posY = 175;
let anchoCuadro = 50;
let altoCuadro = 50;
const paso = 10;

function actualizarPosicion() {
  cuadro.style.left = posX + "px";
  cuadro.style.top = posY + "px";
  infoPosicion.textContent = `Posición del cuadro: X=${posX}, Y=${posY}`;
}

function moverCuadro(direccion) {
  switch (direccion) {
    case "ArrowUp":
      posY = Math.max(0, posY - paso);
      break;
    case "ArrowDown":
      posY = Math.min(altoContenedor - altoCuadro, posY + paso);
      break;
    case "ArrowLeft":
      posX = Math.max(0, posX - paso);
      break;
    case "ArrowRight":
      posX = Math.min(anchoContenedor - anchoCuadro, posX + paso);
      break;
  }
  actualizarPosicion();
}

document.addEventListener("keydown", (e) => {
  if (["ArrowUp", "ArrowDown", "ArrowLeft", "ArrowRight"].includes(e.key)) {
    e.preventDefault();
    moverCuadro(e.key);
  }
});

function cambiarColor() {
  const letras = "0123456789ABCDEF";
  let color = "#";
  for (let i = 0; i < 6; i++) {
    color += letras[Math.floor(Math.random() * 16)];
  }

  cuadro.style.backgroundColor = color;
  infoColor.textContent = `Color actual: ${color}`;
}

cuadro.addEventListener("contextmenu", (e) => {
  e.preventDefault();
  cambiarColor();
});

function actualizarCoordenadasRaton(e) {
  const rect = contenedor.getBoundingClientRect();
  const x = e.clientX - rect.left;
  const y = e.clientY - rect.top;

  if (x >= 0 && x <= anchoContenedor && y >= 0 && y <= altoContenedor) {
    infoRaton.textContent = `Coordenadas del ratón: X=${Math.round(
      x
    )}, Y=${Math.round(y)}`;
  }
}

function ratonSale() {
  infoRaton.textContent = "Mueve el ratón en el contenedor";
}

contenedor.addEventListener("mousemove", actualizarCoordenadasRaton);
contenedor.addEventListener("mouseleave", ratonSale);

function cambiarTamaño(accion) {
  const cambio = 5;

  if (accion === "+") {
    if (anchoCuadro < anchoContenedor && altoCuadro < altoContenedor) {
      anchoCuadro += cambio;
      altoCuadro += cambio;
    }
  } else if (accion === "-") {
    if (anchoCuadro > 10 && altoCuadro > 10) {
      anchoCuadro -= cambio;
      altoCuadro -= cambio;
    }
  }

  cuadro.style.width = anchoCuadro + "px";
  cuadro.style.height = altoCuadro + "px";

  if (posX + anchoCuadro > anchoContenedor) {
    posX = anchoContenedor - anchoCuadro;
  }
  if (posY + altoCuadro > altoContenedor) {
    posY = altoContenedor - altoCuadro;
  }

  actualizarPosicion();
}

document.addEventListener("keydown", (e) => {
  if (e.key === "+") {
    e.preventDefault();
    cambiarTamaño("+");
  } else if (e.key === "-") {
    e.preventDefault();
    cambiarTamaño("-");
  }
});

let modoSeguimiento = false;
let animacionId = null;

function alternarModoSeguimiento() {
  modoSeguimiento = !modoSeguimiento;

  if (modoSeguimiento) {
    if (!animacionId) {
      animar();
    }
  }
}

function animar() {
  if (modoSeguimiento) {
    const rect = contenedor.getBoundingClientRect();
    const mouseX =
      Number(infoRaton.textContent.split("X=")[1]?.split(",")[0]) || posX;
    const mouseY =
      Number.parseInt(infoRaton.textContent.split("Y=")[1]) || posY;

    if (
      mouseX >= 0 &&
      mouseX <= anchoContenedor &&
      mouseY >= 0 &&
      mouseY <= altoContenedor
    ) {
      const objetivoX = Math.max(
        0,
        Math.min(mouseX - anchoCuadro / 2, anchoContenedor - anchoCuadro)
      );
      const objetivoY = Math.max(
        0,
        Math.min(mouseY - altoCuadro / 2, altoContenedor - altoCuadro)
      );

      posX += (objetivoX - posX) * 0.1;
      posY += (objetivoY - posY) * 0.1;
      actualizarPosicion();
    }
  }

  animacionId = requestAnimationFrame(animar);
}

document.addEventListener("keydown", (e) => {
  if (e.key === " ") {
    e.preventDefault();
    alternarModoSeguimiento();
  }
});

actualizarPosicion();
animar();
