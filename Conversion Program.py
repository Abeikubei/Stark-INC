#This program is a simple conversion program, that takes input from the user and converts it into their desired units.
#Conversion like kilometres to metres and Kilometres to miles 

#--------------------------------------------------------Estimated Calculations For The Program----------------------------------------------------------------------------

#This program converts from kilometres to metres
def Km_to_me():
    n = eval(input("Enter the number you want to convert:"))
    math = n * 1000
    print("Your answer in metres is",math)
#This program converts from kilometres to miles
def Km_to_mi():
    q = eval(input("Enter the number you want to convert:"))
    math1 = q*0.621371
    print("Your answer in miles is",math1)
#This program converts from Kilometres to yards
def Km_to_ya():
    w= eval(input("Enter the number you want to convert:"))
    math2 = w*1.09361
    print("Your answer in yards is",math2)
#This program converts from kilometres to feet
def Km_to_fo():
    e = eval(input("Enter the number you want to convert:"))
    math3 = e * 3280.84
    print("Your answer in foot is",math3)
#This program converts from metres to miles
def me_to_mi():
    f = eval(input("Enter the number you want to convert:"))
    math4 = f* 1609.34
    print("Your answer in miles is",math4)
#This program converts from metres to yards
def me_to_ya():
    z = eval(input("Enter the number you want to convert:"))
    math5 = z * 1.09361
    print("Your answer in yards is", math5)
#This program converts from metres to feet
def me_to_fo():
    b = eval(input("Enter the number you want to convert:"))
    math6 = b * 3.28084
    print("Your answer in foot is", math6)
#This program converts from miles to yards
def mile_to_yard():
    x = eval(input("Enter the number you want to convert:"))
    math7 = x * 1760
    print("Your answer in yard is", math7)
#This program converts from miles to feet
def mile_to_foot():
    v = eval(input("Enter the number you want to convert:"))
    math8 = v * 5280
    print("Your answer in foot is", math8)
#This function converts from the unit yards to  the unit feet.
def yard_tofoot():
    l = eval(input("Enter the number you want to convert:"))
    math9 = l* 3
    print('Your answer in foot is',math9)
#--------------------------------------------------------Original Program----------------------------------------------------------------------------

# This is the main program that shows the order of the above codes. 
def main():
    try:
        inpt = int(input(" How many times do you want to run the code(Enter a number):"))
        for run in range(inpt):
            print("This program does unit conversions")
            print("Enter the corresponding number to determine what kind of conversion you want to do:\n1. kilometres to metres \n2. kilometres to miles\n3. Kilometres to yards \n4. Kilometres to foot \n5. Metre to miles \n6. Metre to yard \n7. Metre to foot \n8. Mile to yard \n9. Mile to foot \n10. Yard to Foot ")
            p = str(input("Select according to the numbers above\n"))
            if p == '1':
                Km_to_me()
            elif p == '2':
                Km_to_mi()
            elif p == '3':
                Km_to_ya()
            elif p == '4':
                Km_to_fo()
            elif p == '5':
                me_to_mi()
            elif p =='6':
                me_to_ya()
            elif p =='7':
                me_to_fo()
            elif p =='8':
                mile_to_yard()
            elif p =='9':
                mile_to_foot()
            elif p =='10':
                yard_tofoot()
    except ValueError:
        print("Please enter a number")
main()
#---------------------------------------------------------------- ~Written by ~Abeikubei~-----------------------------------------------------------
