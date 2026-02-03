def media_valores():
    entrada_de_numeros = input(
        "introduce los valores con una coma despues de cada numero: "  
    )

    try:
        numeros = [float(num.strip()) for num in entrada_de_numeros.split(",")]

        media = sum(numeros) / len(numeros)
        print(f"la media de {numeros} es {media}")
    except ValueError:
        print(("debes introducir numeros y que esten separados por comas"))


media_valores()
