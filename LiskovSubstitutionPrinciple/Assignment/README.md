## LSP Assignment

1. The original code violates the LSP because not all birds have the ability to
fly. A duck can fly, but the Ostrich (the other class that extends Bird) cannot
fly. Thus, implementing a fly method for Ostrich would change the functionality 
of the base class Bird. 

2. The original code can be made to conform to the LSP by moving the fly method
to a new class representing flying type birds and then the Duck class extends
that class while Ostrich extends the Bird class. Thus, the functionality of the
base classes are preserved. 