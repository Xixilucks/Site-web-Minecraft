import random
import itertools

PLAQUES = {
    'A': 9, 'B': 2, 'C': 2, 'D': 3, 'E': 15, 'F': 2, 'G': 2, 'H': 2,
    'I': 8, 'J': 1, 'K': 1, 'L': 5, 'M': 3, 'N': 6, 'O': 6, 'P': 2,
    'Q': 1, 'R': 6, 'S': 6, 'T': 6, 'U': 6, 'V': 2, 'W': 1, 'X': 1,
    'Y': 1, 'Z': 1
}

def tirage_lettre(n):
    # Tirage des lettres
    lettres_tirees = []
    for i in range(n):
        # Sélectionne une lettre aléatoire parmi les plaques restantes
        lettre = random.choice(list(PLAQUES.keys()))
        while PLAQUES[lettre] == 0:
            lettre = random.choice(list(PLAQUES.keys()))
        # Retire la plaque correspondante
        PLAQUES[lettre] -= 1
        # Ajoute la lettre à la liste
        lettres_tirees.append(lettre)
    print(lettres_tirees)

    # Génération de tous les anagrammes possibles avec les lettres tirées
    anagrammes = {}
    for i in range(1, n+1):
        for mot in itertools.permutations(lettres_tirees, i):  # itertools.permutations() permet de générer tous les anagrammes possibles
            mot = ''.join(mot)
            if mot in anagrammes:
                continue
            # Calcul du coût du mot
            cout = sum(PLAQUES[lettre] for lettre in mot)
            anagrammes[mot] = cout
    
    with open("anagramme.txt", "r") as f:
        mots_valides = [line.strip() for line in f.readlines()] 
    anagrammes_valides = {}
    for key in anagrammes.keys():
        if key in mots_valides:
            anagrammes[key].append(anagrammes_valides)
    
    return anagrammes_valides

print(tirage_lettre(6))


def mot_le_plus_long(n):
        # Tirage des lettres
    lettres_tirees = []
    for i in range(n):
        # Sélectionne une lettre aléatoire parmi les plaques restantes
        lettre = random.choice(list(PLAQUES.keys()))
        while PLAQUES[lettre] == 0:
            lettre = random.choice(list(PLAQUES.keys()))
        # Retire la plaque correspondante
        PLAQUES[lettre] -= 1
        # Ajoute la lettre à la liste
        lettres_tirees.append(lettre)
    print(lettres_tirees)

    # Génération de tous les anagrammes possibles avec les lettres tirées
    anagrammes = {}
    for i in range(1, n+1):
        for mot in itertools.permutations(lettres_tirees, i):
            mot = ''.join(mot)
            if mot in anagrammes:
                continue
            # Calcul du coût du mot
            cout = sum(PLAQUES[lettre] for lettre in mot)
            anagrammes[mot] = cout
    
    with open("anagramme.txt", "r") as f:
        mots_valides = [line.strip() for line in f.readlines()] 
    anagrammes_valides = {}
    for key in anagrammes.keys():
        if key in mots_valides:
            anagrammes[key].append(anagrammes_valides)
    
    # Trie les anagrammes par ordre décroissant de leur score
    anagrammes_tries = sorted(anagrammes_valides.items(), key=lambda x: x[1], reverse=True) # x[1] est le score de l'anagramme x[0] (le mot)
    
    # Parcourt les anagrammes triés pour trouver le mot le plus long
    for anagramme, score in anagrammes_tries:
        # Retourne le premier anagramme trouvé, qui sera le mot le plus long
        return anagramme, score
    
    # Si aucun anagramme valide n'a été trouvé, retourne None
    return None, 0

print(mot_le_plus_long(6))


def liste_binaire(n):
    if n == 0:
        return [[]]
    else:
        sous_listes = liste_binaire(n-1)
        return [[0] + l for l in sous_listes] + [[1] + l for l in sous_listes]
    

import tkinter as tk

class Application(tk.Frame):
    def __init__(self, master=None):
        super().__init__(master)
        self.master = master
        self.pack()
        self.create_widgets()

    def create_widgets(self):
        # Label pour afficher le tirage de lettres
        self.tirage_label = tk.Label(self)
        self.tirage_label.pack()

        # Bouton pour générer un nouveau tirage de lettres
        self.tirage_button = tk.Button(self, text="Nouveau tirage", command=self.generer_tirage)
        self.tirage_button.pack()

        # Label pour afficher le mot le plus long
        self.mot_label = tk.Label(self)
        self.mot_label.pack()

        # Label pour afficher le score du mot le plus long
        self.score_label = tk.Label(self)
        self.score_label.pack()

    def generer_tirage(self):
        # Génère un nouveau tirage de lettres avec 10 lettres
        tirage = tirage_lettre(10)

        # Affiche le tirage de lettres dans le label correspondant
        self.tirage_label.config(text=f"Tirage : {' '.join(tirage)}")

        # Trouve le mot le plus long à partir du tirage de lettres
        mot, score = mot_le_plus_long(tirage)

        # Affiche le mot le plus long et son score dans les labels correspondants
        self.mot_label.config(text=f"Mot le plus long : {mot}")
        self.score_label.config(text=f"Score : {score}")

root = tk.Tk() # Crée une fenêtre
app = Application(master=root) # Crée une instance de la classe Application
app.mainloop() # Lance la boucle principale de l'application


#je suis pas sur que l'interface finctionne mais au moin y'a une trace.
#Cette interface graphique tkinter crée une fenêtre avec plusieurs labels et un bouton. 
# Le label tirage_label affiche le tirage de lettres généré aléatoirement. Le bouton tirage_button permet de générer un nouveau tirage de lettres et de trouver 
# le mot le plus long à partir de ce tirage. Le label mot_label affiche le mot le plus long trouvé et le label score_label affiche le score correspondant.
# Lorsque l'utilisateur clique sur le bouton tirage_button, la fonction generer_tirage est appelée. Cette fonction génère un nouveau tirage de lettres avec 
# la fonction tirage_lettre(n) et l'affiche dans le label tirage_label. Ensuite, elle trouve le mot le plus long à partir de ce tirage avec la fonction mot_le_plus_long(tirage, dico)
#  et l'affiche dans les labels correspondants.
