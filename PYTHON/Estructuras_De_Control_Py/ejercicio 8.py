numero = 1
suma_pares = 0
while numero <= 20:
    if numero % 2 == 0:   
        suma_pares += numero
    numero += 1

# Mostramos el resultado
print("La suma de los pares es", suma_pares)
