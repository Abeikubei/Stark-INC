import random

ListA = list() #create empty listA
ListB = list() #create empty list B

## to the main function DotProduct

def DotProduct(N,ListA,ListB):
    for num in range(0,N):
        q = random.randint(1,1000)
        ListA.append(q)
    #for num in the range 0 to N, q will pick a random number from 1 to 1000
    #and append it to the empty listA
    
    for num1 in range(0,N):
        k = random.randint(1,1000)
        ListB.append(k)
    # for num 1 in the range 0 to N, k will pick a random number from 1 to 1000
    #and append it to the empty listB
    
    math = sum(num*num1 for num,num1 in zip(ListA,ListB))
    # for every character in List A and ListB , their product will be found and
    # put into the identifier math.
    
    print("The size of the list is:",N)
    print("ListA is:",ListA)
    print("ListB is:",ListB)
    print("The Dot Product is;",math)

DotProduct(10,ListA,ListB)

DotProduct(100,ListA,ListB)



### Helped by Shah Quadri from Youtube.
