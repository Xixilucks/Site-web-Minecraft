
import random




nombre_aleatoire = random.randint(1, 100)
valeur_choisie = int(input("entrez la valeur choisie\n"))
nombre_essaie = 0
while valeur_choisie != nombre_aleatoire :
    print("ce n'est pas la bonne valeur")
    if nombre_aleatoire > valeur_choisie :
        print("le nombre voulu est plus grande")
    else :
        print("la valeur voulue est plus petite")
    valeur_choisie = int(input("réesseyer\n"))
    nombre_essaie += 1
print("felicitation vous avez trouver la bonne valeur")
print(nombre_essaie)
 




