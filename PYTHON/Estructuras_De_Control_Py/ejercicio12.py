def calcular_media():

    while True:
        try:
            num1_input = input("Ingresa el primer número: ")
            num1 = float(num1_input)
            break
        except ValueError:
            print("Error: Debes ingresar un número válido. Intenta nuevamente.")
    
    while True:
        try:
            num2_input = input("Ingresa el segundo número: ")
            num2 = float(num2_input)
            break
        except ValueError:
            print("Error: Debes ingresar un número válido. Intenta nuevamente.")
    

    media = (num1 + num2) / 2
    
    # Mostrar resultado
    print("Resultad")
    print(f"Número 1: {num1}")
    print(f"Número 2: {num2}")
    print(f"Media aritmética: {media}")
    
    return media

if __name__ == "__main__":
    print("=== Calculadora de Media Aritmética ===\n")
    calcular_media()
