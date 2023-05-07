dico={'jean':'rev1789','adele':'vwxyz','jasmine':'c3por2d2','lola':'abcdef'}
dico['sarah']='azerty'
print(dico, len(dico))

def affiche_mdp(dico, name):
    if name in dico:
       return"{name} a un mot de passe"
    else:
        return"{name} n'a pas de mot de passe"

nom=input("Entrez un nom: ")
print(affiche_mdp(dico, nom))


dico2={'zack':8,'eva':5,'paul1':7,'paul2':6,'zoe':7}

somme_ages = sum(dico2.values())
moyenne_ages = somme_ages / len(dico2)

print("Somme des âges :", somme_ages)
print("Moyenne des âges :", moyenne_ages)


notes={'maths':[13,15],'anglais':[16,12,14],'sport':[17]}
notes['nsi']=[18,17]
notes['maths'].append(16)
print(notes)
