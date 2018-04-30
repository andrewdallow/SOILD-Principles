## The Liskov Substitution Principle

The Liskov Substitution principle states that, if S is a subtype of T, then 
objects of type T may be replaced with objects of type S without altering any 
of the desirable properties of the program. That is, we must make sure that the 
new derived classes just extend, without replacing, the functionality of the old 
classes. 

For example, suppose we have a class “Square” (Length of sides fixed) which 
extends a class “Rectangle” (Sides can be any length).  Rectangle can set both 
the width and height, thus Square needs to alter those methods so that the 
length equals the height whenever those methods are called. This breaks the 
Liskov substitution principle because Square changes the original functionality 
of the class it is extending. This can cause unintended side effects such as 
Square being used where a Rectangle object is expected, and the sides being set 
differently, resulting in both height and width being set to the value of the 
latest method call. Thus, if one calls the area method on rectangle we get an 
unexpected result. 
