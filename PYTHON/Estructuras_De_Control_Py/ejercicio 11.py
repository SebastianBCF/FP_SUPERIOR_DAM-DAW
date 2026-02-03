def presentar(nombre, edad=18):
    print(f"Hola, mi nombre es {nombre} y tengo {edad} años")

print("Llamada sin argumento edad:")
presentar("Sebastian")

print("Llamada con argumento edad:")
presentar("Maria", 25)
presentar("Juan", 30)
