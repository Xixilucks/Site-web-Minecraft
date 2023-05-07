def calculer_indices(word):
    anagramme = ''.join(sorted(word))
    return anagramme

mot=input("Entrez un mot: ")
mot=mot.upper()
print(calculer_indices(mot))

def sont_anagrames(word1, word2):
    if calculer_indices(word1) == calculer_indices(word2):
        return True
    else:
        return False
    
mot1=input("Entrez un mot: ")
mot1=mot1.upper()
mot2=input("Entrez un mot: ")
mot2=mot2.upper()
print(sont_anagrames(mot1, mot2))


liste_fr=[]
with open ("repertoire_francais_tout.txt", "r", encoding="utf-8") as f:
     liste_fr= [line.strip() for line in f.readlines()]

def dictionnaire_indice_mots(liste):
    dico = {}
    for mot in liste:
        anagramme = "".join(sorted(mot))
        if anagramme in dico:
            dico[anagramme].append(mot)
        else:
            dico[anagramme] = [mot]
    return dico


print(dictionnaire_indice_mots(liste_fr), "Il y a ",len(dictionnaire_indice_mots(liste_fr)),"anagrammes dans le dictionnaire.")
      

open("anagramme.txt", "w").close()

def fichier_indice_mot(fichier_in, fichier_out):
    with open(fichier_in, "r") as f_in:
        mots=[line.strip() for line in f_in.readlines()]

    anagrammes = {}

    for mot in mots:
        canonique = "".join(sorted(mot))

        if canonique in anagrammes:
            anagrammes[canonique].append(mot)
        else:
            anagrammes[canonique] = [mot]
        
    with open(fichier_out, "w") as f_out:
        for anagramme in anagrammes:
            f_out.write(anagramme + ": " + ", ".join(anagrammes[anagramme]) + "\n")

print(fichier_indice_mot("repertoire_francais_tout.txt", "anagramme.txt"))


