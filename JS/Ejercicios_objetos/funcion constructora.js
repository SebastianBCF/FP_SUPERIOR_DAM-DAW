function persona(nombre, edad, profesion) {
  this.nombre = nombre;
  this.edad = edad;
  this.profesion = profesion;

  this.presentarse = function () {
    console.log(
      "nombre ${this.nombre}, tengo ${this.edad}, y mi profesion es ${this.profesion"
    );
  };
}

const persona1 = new persona("ana", 19, "desarrolladora");
const persona2 = new persona("benjamin", 32, "poll dancer");

persona1.presentarse();
persona2.presentarse();
