n = int(input("Voer het startnummer in: ")) 
m = int(input("Voer het eindnummer in: ")) 

count = 0 

for i in range(n,m): # <--- i moet tussen 'n' en 'm' in zitten
    if i > 1:        # <--- als i groter is dan 1, 
        for j in range(2,i):    # <--- j moet tussen 2 en i zitten
            if(i % j == 0):     # als i delen door j uitkomt op 0, doe een break.
                break 
        else: 
            print(i) # Toon priemgetallen
            count = count + 1 
print("Totaal priemgetallen tussen {0} en {1} is {2}".format(n,m,count))
