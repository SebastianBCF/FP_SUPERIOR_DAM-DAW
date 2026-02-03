numero = int(input("introduce un numero del 5 al 12 "))

if 5 <= numero <= 12:
    print(f"tabla de multiplicar del {numero}")
    for i in range(1, 11):
        print(f"{numero} x {i} = {numero * i}")
    else:
        print(
            "el numero que introduciste no es un numero o no esta en los limites del programa"
        )
