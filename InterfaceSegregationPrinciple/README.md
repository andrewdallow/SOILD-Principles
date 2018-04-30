## The Interface Segregation Principle

The interface segregation principle (ISP) states that clients should not be 
forced to implement interfaces they do not use. Instead of one fat interface, 
many small interfaces are preferred based on groups of methods, each serving 
one submodule. The ISP can serve as a kind of barrier between a client and an 
object it uses, protecting it from any changes in the source code. 

For example, suppose we have a worker interface with methods “work” and “eat” 
which is implemented by a “Worker” class. The “Manager” instructs the Workers 
when to work and eat. However, what happens when a new type of worker is created 
such as a “Robot”? It implements the worker interface, but it does not need to 
eat. Thus, we have an unneeded dependence in the Robot Class and so if something 
changes in the worker interface then Robot will need to be redeployed along with 
the Worker class, an extra unnecessary deployment step.

Using the ISP we can create the two interfaces “Workable” (with just work()) 
and “Feedable” (with just eat()) and implement only the required interfaces 
and in turn the required methods, thus, removing the unnecessary dependency. 