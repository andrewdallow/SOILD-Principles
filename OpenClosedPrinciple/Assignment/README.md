## Open/Closed Principle Assignment

### Original Code
The original code violates the open/closed principle because the AreaCalculator 
class function 'area' has an if statement for every type of area calculation. 
Therefore every time a new area calculation is added this one class must be modified.
Thus, the class is not closed to modification. This design is also not extensible
because newer area calculations are added to extra if statements rather then
extending the area method. 

### Refactored Code
The refactored code shown here has an interface with an area method. Now for every
different shape imaginable all you have to do is implement the shape interface
and write their own version of the area calculation. Thus is open to extension.
The Shape interface and AreaCalculator do not change at all with the addition 
of new shapes and so are closed to modification. Thus the code conforms to the
OCP. 