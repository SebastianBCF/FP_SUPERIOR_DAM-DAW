class Calculadora:
    def sumar(self, a, b):
        resultado = int(float(a)) + int(float(b))
        return resultado
    
    def restar(self, a, b):
        resultado = int(float(a)) - int(float(b))
        return resultado

if __name__ == "__main__":
    calc = Calculadora()
    
    num1 = 10.7
    num2 = 5.3
    

    resultado_suma = calc.sumar(num1, num2)
    print(f"Suma de {num1} y {num2} = {resultado_suma}")
    
    
    resultado_resta = calc.restar(num1, num2)
    print(f"Resta de {num1} y {num2} = {resultado_resta}")


