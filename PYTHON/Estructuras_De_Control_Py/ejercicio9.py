
numero = int(input("Introduce un número para mostrar su tabla de multiplicar: "))
print("Tabla de multiplicar del {numero}:")
for i in range(1, 11):
    resultado = numero * i
    print("{numero} x {i} = {resultado}")
