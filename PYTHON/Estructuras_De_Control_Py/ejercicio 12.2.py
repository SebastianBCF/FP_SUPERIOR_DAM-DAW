def media(*numeros):
    if len(numeros) < 2:
        raise ValueError("Debes proporcionar al menos dos números para calcular la media.")
    return sum(numeros) / len(numeros)

# Ejemplo de uso:
print(media(4, 8))          
print(media(3, 5, 7, 9))     
print(media(10, 20, 30, 40)) 
