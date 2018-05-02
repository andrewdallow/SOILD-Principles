## Single Responsibility Principle
Definition: A class should have one and only one responsibility. 

The original code violates the SRP because it is responsible to 2 different 
actors. The login function is responsible to the 'user account' system, while 
the calculateTaxClass is responsible to the 'accounting' system. As a result the 
login system and accounting system have become coupled at this Customer class.  

In order for the class to conform to the SRP then one can move the calculateTaxClass 
and login responsibilities to their own classes Tax and User, respectively, 
leaving the Customer class as a Data structure. Thus, decoupling the 2 actors 
and creating more cohesive classes that are not affected by changes in each 
others implementations. 