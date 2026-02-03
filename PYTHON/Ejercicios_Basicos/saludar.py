import sys 
def saludar(nombre):
    return f"Hola, {nombre}!"
def despedir(nombre):
    return f"Adiós, {nombre}!"

if __name__ == "__main__":
    if len(sys.argv) != 3:
        print("no me ejecutes solo soy un modulo")
        print (__name__)
        sys.exit(1)
    else: 
        print('asi si.....')
        print(__name__)
   