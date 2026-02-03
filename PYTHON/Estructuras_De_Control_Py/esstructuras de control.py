edad = int(input("Por favor, ingresa tu edad: "))
if edad < 18:
    print("Eres menor de edad.")
elif 18 <= edad < 64:
    print("Eres adulto.")
else:
    print("Eres mayor.")