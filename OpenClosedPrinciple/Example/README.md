## Open/closed principle example

### Senario: 
Website that needs to present data in several different formats.
* Mobile 
* Desktop 
* Widget
* Plain Text
* JSON

### Bad Solution

Write a single class with a function for each method of display. This violates 
the open/closed principle as each new addition means modifying the original class.
This solution is also not extensible. Example in Folder BadCode.

### Good Solution

Create an abstract class for which all extending class share the same function, 
but have different implementations. This means one can add new functionality 
by extension and without modifying existing code. Example in Folder Good Code.


