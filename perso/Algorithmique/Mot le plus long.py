def recherche(word):
    word_list=[]
    with open("repertoire_francais_tout.txt","r",encoding="utf-8") as f:
        for ligne in f:
            word_list.append(ligne)
    
    print("La liste de mot comporte",len(word_list),"mots.")
    i=0
    for ligne in word_list:
        i+=1
        if ligne.strip() == word:
            return "Le mot est français, il est le mot numéro",i-1,"dans la liste."
        
choice=input("Entrez un mot à vérifier: ")
choice=choice.upper()
print(recherche(choice))


def dicho(word):
    word_list=[]
    with open("repertoire_francais_tout.txt","r",encoding="utf-8") as f:
        for ligne in f:
            word_list.append(ligne)
    
    print("La liste de mot comporte",len(word_list),"mots.")

    debut = 0
    fin = len(word_list) - 1
    
    while debut <= fin:
        milieu = (debut + fin) // 2
        if word_list[milieu] < word:
            debut = milieu + 1
        elif word_list[milieu] > word:
            fin = milieu - 1
        else:
            return milieu
    
    return milieu

choix=input("Entrez un mot à vérifier: ")
choix=choix.upper()
print(dicho(choix))