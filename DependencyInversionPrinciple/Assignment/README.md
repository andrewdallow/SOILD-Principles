## DIP Assignment

1. The class Manager violates the DIP because it depends on the concrete class
Worker and not on an abstraction. Thus every time the volatile class Worker changes
there is a risk that it will affect the Manger class.  In addition the 
Manager source code would need to be altered every time a new type of worker 
is added. 

2. The solution is to create an interface called Workable with the method work(),
then Worker and SuperWorker or any future workers will implement their own
work method. This conforms to the OCP as well. 