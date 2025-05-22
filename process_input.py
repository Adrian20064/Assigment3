import sys 
#Accept input values for x, y, and z from a PHP script via command-line arguments.
x = int(sys.argv[1])
y = int(sys.argv[2])
z = int(sys.argv[3])


#f-string the values to be printed as in the Word document
print(f"Original Values: \n x = {x} \n y = {y} \n z = {z}") #the "\n" is the line spacing, similar to br in HTML is just to be exactly as is in the Word document

print("Calculation steps:") 
#Adding the operations to the list steps by step as is on the image of the Word document

print('1. Initial Value of x:',x)
x += y
print('2. After x+=y:',x,sep=' ')
x-= z
print('3. After x-=z:',x,sep=' ')
x*= y
print('4. After x*=y:',x,sep=' ')
x%= z
print('5. After x%=z:',x,sep=' ')
x/= y
print('6. After x/=y:',x,sep=' ')


#Final Result 
final = x + y + z
print(f"\nFinal Result: x + y + z is: {x} + {y} + {z} = {final}") #the "\n" is the line spacing, similar to br in HTML is just to be exactly as is in the Word document
    