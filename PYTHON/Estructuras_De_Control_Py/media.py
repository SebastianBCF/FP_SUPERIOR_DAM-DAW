def media_de_valores():
    try:

        valor1 = int(input("introduce el primer valor"))
        valor2 = int(input("introduce el segundo valor"))

        media = (valor1 + valor2) / 2
        print(f"la media de {valor1} y {valor2} es {media}")
    except ValueError:
        print("Error: Por favor introduce valores numéricos válidos")


media_de_valores()
