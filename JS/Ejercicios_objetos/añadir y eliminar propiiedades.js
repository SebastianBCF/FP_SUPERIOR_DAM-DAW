let libro = {
  titulo: "El Principito",
  autor: "Antoine de Saint-Exupéry",
};

libro.año = 1999;

delete libro.autor;

console.log(libro);
