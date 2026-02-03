
for i in range(1, 21):
    if i % 2 == 0:  
        print(i, end = ', ') 
        
for i in range (2, 21, 2): 
    print(i, end = ', ')

pares = [i for i in range(1, 21) if i % 2 == 0] 
for i in pares:
    print(i, end = ', ')    