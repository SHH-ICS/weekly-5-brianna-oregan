#def calculatePi(digits):
 # result = 0
  #return result

#number_of_digits = input()
#print(calculatePi(number_of_digits))

def calculatePi(digits):
  result = sum(4 * (-1) ** i / (2 * i + 1) for i in range(digits))
  return result

number_of_digits = int(input()) 
pi = calculatePi(number_of_digits)  
print(pi)