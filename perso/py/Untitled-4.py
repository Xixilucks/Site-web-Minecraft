from wonderwords import RandomWord

mot = RandomWord()
mot1 = mot.word()

mot_caché = ""

for l in mot1 :
    mot_caché += "_ "
liste = [i for i in mot1]


nb_erreure = 6
lettre_trouvée = ""
while nb_erreure != 0 :
 print("il vous reste " + str(nb_erreure) + " erreures possibles.") 
 print("Le mot a rechercher est : " + mot_caché)
 lettre = input("Entrez votre lettre\n")
 if lettre in mot1 : 
    print("Bonne réponse.")
    lettre_trouvée += lettre
 else :
    print("La lettre n'appartient pas au mot, réessayeez")
    nb_erreure -= 1
    if nb_erreure==0:
        print(" ==========Y= ")
    if nb_erreure<=1:
        print(" ||/       |  ")
    if nb_erreure<=2:
        print(" ||        0  ")
    if nb_erreure<=3:
        print(" ||       /|\ ")
    if nb_erreure<=4:
        print(" ||       / \ ")
    if nb_erreure<=5:                    
        print("/||           ")
    if nb_erreure<=6:
        print("==============\n")
 mot_caché =""
 for x in liste :
    if x in lettre_trouvée : 
        mot_caché += x 
    
    else :
        mot_caché += "_ "

 if "_" not in mot_caché : 
    print("<<Vous avez gagner>>")
    break   

print("Vous avez perdu, le mot etait " + mot1)

 