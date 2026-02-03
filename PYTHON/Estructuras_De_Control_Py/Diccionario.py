personas = {
    "persona1": {"nombre": "sebastian ", "edad": "19", "Estudiante": True},
    "persona2": {"nombre": "Juan", "edad": "34", "Estudiante": False},
    "persona3": {"nombre": "Benjamin", "edad": "40", "Estudiante": True},
}


def mensajeedad(edad):
    if edad < 18:
        return "eres menor de edad"
    elif edad <= 25:
        return "eres muy joven"
    elif edad <= 40:
        return "eres joven"
    else:
        return "Ya no eres joven"


for key, persona in personas.items():
    nombre = persona["nombre"]
    edad = int(persona["edad"])
    print(f"{nombre} {mensajeedad(edad)}")
