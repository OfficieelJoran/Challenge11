telefoonnummer = input ("voer telefoonnummer in: ")

mobielnummer = '06'
nederlands = '+31'
belgisch = '+32'

if nederlands in telefoonnummer:
    print("Dit is een nederlands telefoonnummer")
    exit
    
if belgisch in telefoonnummer:
    print("Dit is een belgisch telefoonnummer")
    exit

if mobielnummer in telefoonnummer:
    print("dit is een mobielnummer")
    exit
else:
    print('dit is geen geldig nummer')