#a 
L=[3,1,-3,32,12,2]        #On défini la liste L.

def triparselection(L):   #On defini la fonction triparselection qui prend en parametre la liste L.
  j=L[0]                #On prend la premiere valeur de la liste L[0] et on la met dans la variable j.
  for i in L:      
    if j > i:
      j=i
  print("La liste est: ",L)
  print("Le plus petit élément de L est: ",j)

triparselection(L)     #On appelle la fonction triparselection avec la liste L en parametre.

#b

L[0],L[1]=L[1],L[0]    #On inverse les valeurs de L[0] et L[1].

print("La liste est: ",L)

#c

def TriParSelection(l):  #On defini la fonction TriParSelection qui prend en parametre la liste l.
    for i in len(l):
        m=l[i]           #On prend la premiere valeur de la liste l[0] et on la met dans la variable m.
        for j in len(l):
            if l[j]<m:          #Si l[j] est plus petit que m alors on met la valeur de l[j] dans m.
                m=l[j]
            elif i!=j:
                tempo=l[i]        #On inverse les valeurs de l[i] et l[j].
                l[i]=l[j]
                l[j]=tempo
    return l         #On retourne la liste l.