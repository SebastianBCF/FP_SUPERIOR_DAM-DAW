while True:
    edad = int (input("Ingresa tu edad: (Comprendida entre 0 y 120) "))
    if edad >= 0 and edad <=120:
        break
    print ("tu edad no es valida intentelo de nuevo")

if edad < 16:
    print("eres un niño")
elif edad >=16 and edad <=21:
    print ("eres un adolecente")
elif edad >=22 and edad <=35:
    print ("eres joven")
elif edad >=36 and edad <=50:
    print ("eres maduro")
elif edad >=51 and edad <=60:
    print ("eres de mediana edad")
elif edad >=61 and edad <=80:
    print ("eres mayor")
elif edad >=81 and edad <=100:
    print ("eres viejo")
else:
    print ("eres centenario")