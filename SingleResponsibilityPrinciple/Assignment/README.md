## Single Responsibility Principle
Definition: A class should have one and only one responsibility. 

The original code violates the SRP because is has 2 responsibilities. It handles 
the login of a user and it handles the calculation of the tax class. 

In order for the class to conform to the SRP then one can move the calculateTaxClass
responsibility to another class called tax. 