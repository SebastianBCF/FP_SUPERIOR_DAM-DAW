let edad = Number(prompt("dime cuantos años tienes:"));
let contrasena = prompt("ahora da una contraseña");
let edadValida = edad >= 18 && edad <= 65;
let contrasenaValida = contrasena.length >= 8;

console.log(`Edad correcta: ${edadValida}`);
console.log(`Contraseña correcta: ${contrasenaValida}`);
if (edadValida && contrasenaValida) {
    console.log("Acceso aceptado.");
} else {
    console.log("Alguna de las condiciones que pusiste no es correcta el acceso fue denegado.");
}
