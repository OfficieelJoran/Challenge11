nterms = int(input("Hoeveel cijfers weergeven?")) #veld om in te vullen hoeveel cijfers je wilt weergeven

#eerste twee cijfers/termen
n1, n2 = 0, 1 # 2 basisgetallen die verder berekend kunnen worden
count = 0

#checken of de hoeveelheid cijfers hoger dan 0 is
if nterms <= 0:
    print("Vul A.U.B een hoger getal in")
# alleen n1 (0) uitprinten als er maar 1 getal hoeft te staand
elif nterms == 1: 
    print("Fibonacci sequence tot en met", nterms, ":")     
    print(n1)
#fibonacci sequence berekening
else:
    print("Fibonacci sequence:")
    while count < nterms: #terwijl 'count' lager is dan nterms (ingevulde veld)
        print(n1)
        nth = n1 + n2 # <--- nth maken om elk opeenvolgend getal te berekenen
#vanuit hier, de berekening van alle getallen na de eerste.
        n1 = n2
        n2 = nth
        count += 1
