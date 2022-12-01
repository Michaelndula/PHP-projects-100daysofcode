### Static & Final Keywords in OOP

#### Static Keywords
The PHP static keyword defines static properties and static methods.
A static property/method of a class can be accessed without creating an object of that class.

A static property or method is accessed by using the scope resolution operator '::' between the class name and the property/method name.

- Note: Objects of a class cannot access static properties in the class but they can access static methods.

![](http://web.webdesigninghouse.com/admin/upload/366519174_static.png)

#### Final keyword
The PHP final keyword defines methods that cannot be overridden in child classes. Classes that are defined final cannot be inherited.

This example demonstrates that a final method cannot be overridden in a child class

Unlike classes and methods, properties cannot be marked final.

![](https://media.geeksforgeeks.org/wp-content/uploads/final-keyword-in-php-1.jpg)