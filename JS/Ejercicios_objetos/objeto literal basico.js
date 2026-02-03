coche = new Object();
coche.marca = "Audi";
coche.modelo = "Q7";
coche.año = 2020;

coche.detalles = function () {
  return this.marca + " " + this.modelo + "(" + this.año + ")";
};
console.log(coche.detalles());
