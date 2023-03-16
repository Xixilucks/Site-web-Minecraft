from math import*

def main() :
 chiffre1 = int(input("entrez le 1er chiffre\n"))
 operation = input("choisissez votre operation\n") 
 chiffre2 = int(input("entrez le 2e chiffre\n"))
 match operation :
    case "+" :
        print(chiffre1 + chiffre2)
   
    case "-" :
        print(chiffre1 - chiffre2)
    
    case "*" :
        print(chiffre1 * chiffre2)
    
    case "/" :
        print(chiffre1 / chiffre2)

    case "**" :
        print(chiffre1 ** chiffre2)
    
    case "v" :
        print(sqrt(chiffre1))

    case "+pi" : 
        print(pi + (chiffre1))
    
    case "-pi" :
        print(pi - (chiffre1))

    case "*pi" : 
        print(pi * (chiffre1))
    
    case "/pi" : 
        print(pi / (chiffre1))
    

    


if __name__ == '__main__' :
    main()
    
   