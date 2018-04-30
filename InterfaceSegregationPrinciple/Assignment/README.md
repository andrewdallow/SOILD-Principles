1. The original code violates the Interface Segregation Principle because
the class "Line" implements iDrawable which has a methods called "calculateArea", 
but a line has no area because it is 1-Dimensional. Thus, Line should not
implement calculateArea().

2. Solution is to create separate interfaces for 2D and 1D items, with the
area method in the 2D interface. 

