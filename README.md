# The SOLID Principles of Software Engineering #

## Introduction
When developing software, one usually begins with a set of requirements that 
the software must contain. If we employ object-oriented design (OOD) the 
requirements are first broken up into smaller more manageable problems. Then we 
identify all the objects needed to manipulate the data and how they relate to 
one another.  The code is written, and the program works as required. At some 
time in the future the requirements are changed, for example new features need 
to be added.  These new features are not developed by the original coders and 
the initial design did not anticipate these changes. New and unplanned for 
dependencies are introduced into the code bit by bit over time, making it 
impossible to maintain the code to the point where small changes in one area 
break the software in unrelated areas.  

“Rotting code” (Martin 2000) is a result of code not being made resilient to 
change. Symptoms can include; Rigidity – difficult to change code, Fragility – 
tendency for code to break due to changes, Immobility – inability to reuse code, 
and Viscosity – difficulty of adding design-preserving code. To forestall the 
degradation of code one needs to assume that the requirements will always change
and so the dependencies between modules need to be managed. This management 
consists of the creation of dependency firewalls in which these dependencies 
do not propagate. Hence, The SOLID principles of OOD are a guideline for 
designing code which has low coupling and high cohesion. 

### Single Responsibility Principle
The first of the principles is called the Single Responsibility Principle (SRP).  This principle says that a class should have one and only one reason to change. That is, each class is responsible for a single problem, task, or concern. 

For example, say we have a book class which handles turning the pages and the presentation of the content. Appling the SRP, the presentation handling can be made its own abstract class and then for each type of presentation (HTML, Plain text, etc.) a new class is made. Thus, separating the responsibilities. 
This example can be found here: 
https://github.com/andrewdallow/SOLID-Principles/tree/master/SingleResponsibilityPrinciple/Examples/Book

### Open/Closed Principle
The next principle is called the Open/closed principle which states that a class should be open to extension and closed to modification. This means that we should design classes and functions in such a way that when new functionality is added we should not modify existing code but extend it. Thus, adding new functionality will not affect existing code, reducing the risk of breaking it. 

For example, say we have a website that requires different views of a set of data. The wrong way to do this would be to make a single class with a function for each type of view. This is because each time a new view is added the original class is modified. Thus, increasing the risk of breaking the code every time it changes.  

Using the Open/closed principle we can create an abstract class with a method shared in all extending classes, but with their own implementation. Thus, the higher-level code, such as the abstract class and any external code which uses these views, is protected from changes in the lower-level code (i.e. code for specific views). 

For a code example, please visit: 
https://github.com/andrewdallow/SOLID-Principles/tree/master/OpenClosedPrinciple/Example

The goal of the OCP is achieved by partitioning the system into components, and arranging those components into a dependency hierarchy that protects higher-level components from changes in lower-level components. 

### Liskov Substitution Principle
The Liskov Substitution principle states that, if S is a subtype of T, then objects of type T may be replaced with objects of type S without altering any of the desirable properties of the program. That is, we must make sure that the new derived classes just extend, without replacing, the functionality of the old classes. 

For example, suppose we have a class “Square” (Length of sides fixed) which extends a class “Rectangle” (Sides can be any length).  Rectangle can set both the width and height, thus Square needs to alter those methods so that the length equals the height whenever those methods are called. This breaks the Liskov substitution principle because Square changes the original functionality of the class it is extending. This can cause unintended side effects such as Square being used where a Rectangle object is expected, and the sides being set differently, resulting in both height and width being set to the value of the latest method call. Thus, if one calls the area method on rectangle we get an unexpected result. 

See code example at: https://github.com/andrewdallow/SOLID-Principles/tree/master/LiskovSubstitutionPrinciple

### Interface Segregation Principle
The interface segregation principle (ISP) states that clients should not be forced to implement interfaces they do not use. Instead of one fat interface, many small interfaces are preferred based on groups of methods, each serving one submodule. The ISP can serve as a kind of barrier between a client and an object it uses, protecting it from any changes in the source code

For example, suppose we have a worker interface with methods “work” and “eat” which is implemented by a “Worker” class. The “Manager” instructs the Workers when to work and eat. However, what happens when a new type of worker is created such as a “Robot”? It implements the worker interface, but it does not need to eat. Thus, we have an unneeded dependence in the Robot Class and so if something changes in the worker interface then Robot will need to be redeployed along with the Worker class, an extra unnecessary deployment step.  

Using the ISP we can create the two interfaces “Workable” (with just work()) and “Feedable” (with just eat()) and implement only the required interfaces and in turn the required methods, thus, removing the unnecessary dependency. 

See code example at: 
https://github.com/andrewdallow/SOLID-Principles/tree/master/InterfaceSegregationPrinciple/Example 

### Dependency Inversion Principle
The Dependency Inversion Principle (DIP) states that source code dependencies should only refer to abstractions (abstract classes and interfaces), not concretions.  Thus, any higher-level module should not depend on lower-level modules. Both should depend on abstractions. This also infers that abstractions should not depend on the implementation, but rather the implementation should depend on the abstractions. 

Every change to an abstract interface corresponds to a change in its concrete implementations. Conversely, changes to the concrete implementations rarely require changes to the interfaces that they implement. Therefore, interfaces are less volatile than implementations. The implication is that stable software architectures are those that avoid depending volatile concretions, and that favour the use of stable abstract interfaces. 

When using the DIP one should follow the following coding practises:
* Don’t refer to volatile concrete classes
* Don’t derive from volatile concrete classes. 
* Don’t override concrete functions.
* Never mention the name of anything concrete and volatile.

The DIP does not need to apply to concrete classes that are not volatile (i.e. classes that change vary rarely). 

So how do we instantiate these concrete classes? The creation of volatile concrete objects requires special handling and in most object-oriented languages we would use and Abstract Factory Design pattern. 

For Example, suppose we have an EBookReader” which can read a PDF book by taking an instance of the class “PdfBook” and calling the method read on it. “EBookReader” now depends on the “PdfBook” class and so breaks the DIP because EBookReader should depend on an abstraction not the concrete implementation. 

To conform to the DIP we can create an interface called Readable with the method read. Now the “EBookReader” will depend on the interface Readable instead not the concrete implementation of “PdfBook”. Thus, changes in “PdfBook” won’t affect the “EBookReader”. In addition to conforming to the DIP, this also conforms to the OCP, allowing many different types of Readable implementations to be created later without changing other classes.  

To create an instance of a Readable book we implement the Simple abstract factory method. This takes a string (i.e. ‘pdf’) and returns the wanted instance. This groups the dependencies in one place in stead of being al over the place in the source code causing dependency problems.

See example code here: https://github.com/andrewdallow/SOLID-Principles/tree/master/DependencyInversionPrinciple/Example

### Conclusion



## References
Csaba, P. 2013. The SOLID Principles.https://code.tutsplus.com/series/the-solid-principles--cms-634 

Biefeld S. 2009. Pablo’s SOLID Software Development. https://lostechies.com/wp-content/uploads/2011/03/pablos_solid_ebook.pdf 

Martin, R. C. 2017. Clean Architecture: A Craftsman's Guide to Software Structure and Design, First Edition. Prentice Hall.  (Part 3: Chapters 7 – 11).

Martin, R. C. 2018. Design Principles. http://www.oodesign.com.

Martin, R.C. 2000. Design Principles and Design Patterns. https://web.archive.org/web/20150906155800/http://www.objectmentor.com/resources/articles/Principles_and_Patterns.pdf 
