## The Dependency Inversion Principle
The Dependency Inversion Principle (DIP) states that source code dependencies 
should only refer to abstractions (abstract classes and interfaces), not 
concretions.  Thus, any higher-level module should not depend on lower-level 
modules. Both should depend on abstractions. This also infers that abstractions 
should not depend on the implementation, but rather the implementation should 
depend on the abstractions. 

Every change to an abstract interface corresponds to a change in its concrete 
implementations. Conversely, changes to the concrete implementations rarely 
require changes to the interfaces that they implement. Therefore, interfaces 
are less volatile than implementations. The implication is that stable software 
architectures are those that avoid depending volatile concretions, and that 
favour the use of stable abstract interfaces. 

When using the DIP one should follow the following coding practises:

* Don’t refer to volatile concrete classes
* Don’t derive from volatile concrete classes. 
* Don’t override concrete functions.
* Never mention the name of anything concrete and volatile.

So how do we instantiate these concrete classes? The creation of volatile 
concrete objects requires special handling and in most object-oriented 
languages we would use and Abstract Factory Design pattern. 

The DIP does not need to apply to concrete classes that are not volatile 
(i.e. classes that change vary rarely). 

So how do we instantiate these concrete classes? The creation of volatile 
concrete objects requires special handling and in most object-oriented languages 
we would use and Abstract Factory Design pattern. 

For Example, suppose we have an EBookReader” which can read a PDF book by 
taking an instance of the class “PdfBook” and calling the method read on it. 
“EBookReader” now depends on the “PdfBook” class and so breaks the DIP because 
EBookReader should depend on an abstraction not the concrete implementation. 
To conform to the DIP we can create an interface called Readable with the method 
read. Now the “EBookReader” will depend on the interface Readable instead not 
the concrete implementation of “PdfBook”. Thus, changes in “PdfBook” won’t 
affect the “EBookReader”. In addition to conforming to the DIP, this also 
conforms to the OCP, allowing many different types of Readable implementations 
to be created later without changing other classes.  

To create an instance of a Readable book we implement the Simple abstract 
factory method. This takes a string (i.e. ‘pdf’) and returns the wanted 
instance. This groups the dependencies in one place in stead of being al over 
the place in the source code causing dependency problems.

