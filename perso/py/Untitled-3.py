
import random

def main() : 

 liste = ['pierre','feuille','ciseaux']

 nombre_de_manche = 0
 
 score_ordi = 0
 score_joueur = 0
 
 while score_joueur != 3 and score_ordi != 3 :
     choix_ordi = random.choice(liste)
     choix_joueur = input("choisissez votre signe\n")
     if choix_joueur not in liste :
        print("le caractère taper ne correspond pas au critère demander")
     
     if choix_joueur == choix_ordi :
         print("match nul, réesseyez")

     if choix_joueur == "pierre" and choix_ordi == "feuille" :
         print("vous avez perdu")
         score_ordi += 1

     if choix_joueur == "pierre" and choix_ordi == "ciseaux" :
         print("vous avez gagner")
         score_joueur += 1
 
     if choix_joueur == "feuille" and choix_ordi == "ciseaux" :
         print("vous avez perdu")
         score_ordi += 1
 
     if choix_joueur == "feuille" and choix_ordi == "pierre" :
         print("vous avez gagner")
         score_joueur += 1

     if choix_joueur == "ciseaux" and choix_ordi == "pierre" :
         print("vous avez perdu")
         score_ordi += 1

     if choix_joueur == "ciseaux" and choix_ordi == "feuille" : 
         print("vous avez gagner")
         score_joueur += 1
     print(choix_ordi)
     nombre_de_manche += 1
     
 if score_joueur > score_ordi :
    print("bravo, vous avez gagner avec " + str(score_joueur) + " points!!")

 else :
    print("vous avez perdu avec "  + str(score_ordi) + " points pour l'ordinateur, une prochaine fois peut etre")

if __name__ == '__main__' :
    main()