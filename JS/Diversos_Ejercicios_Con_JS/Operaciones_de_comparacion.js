let numero1 = Number(prompt("Ingresa el primer número:"));
let numero2 = Number(prompt("Ingresa el segundo número:"));


if (numero1 > numero2) {
    console.log(`${numero1} es mayor que ${numero2}`);
} else if (numero1 < numero2) {
    console.log(`${numero1} es menor que ${numero2}`);
} else if (numero1 === numero2) {
    console.log(`${numero1} y ${numero2} son iguales`);
}
