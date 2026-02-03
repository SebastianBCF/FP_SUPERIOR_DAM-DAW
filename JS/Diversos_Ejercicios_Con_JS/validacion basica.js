function validaredad() {
    let edad = prompt("Por favor ingresa tu edad:");

    if (edad === null ) {
        document.getElementById("resultado").innerText = "Operación cancelada.";
        return;
    }
}