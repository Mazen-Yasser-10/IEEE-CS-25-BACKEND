## who invent OOP and why


#### Alan Kay coined the term “object oriented programming” at grad school in 1966 or 1967. The big idea was to use encapsulated mini-computers in software which communicated via message passing rather than direct data sharing — to stop breaking down programs into separate “data structures” and “procedures”.

## Encapsulation & Abstraction


#### Encapsultion is the concept of binding data and methods and preventing it from unauthorized access. It wraps up data and functions under a single unit. Another way to think about encapsulation is, that it is a protective shield that prevents the data from being accessed by the code outside this shield.

#### Data Abstraction is the property by virtue of which only the essential details are displayed to the user. The trivial or the non-essential units are not displayed to the user. Ex: A car is viewed as a car rather than its individual components. Data Abstraction may also be defined as the process of identifying only the required characteristics of an object ignoring the irrelevant details.

## Inheritance


#### Inheritance in OOP = When a class derives from another class.

#### The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

## PHP Interfaces & Polymorphism


#### Interfaces allow you to specify what methods a class should implement.

#### Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".

## PHP Traits


#### PHP only supports single inheritance: a child class can inherit only from one single parent.

#### So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.

#### Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).

## Late static binding & how it works


#### In PHP, programs are saved and then directly run on the browser, the script is executed through a web server and we get the output. We don’t compile PHP programs manually but that does not mean it is never compiled. The PHP interpreter does that for you and runs it. So there are two phases, first, compile-time and second run time. During the compile time, the normal variables are replaced with their values but the static keywords are replaced only in the run time. Overriding a property in child class and creating the instance of the child class, so to get the overridden output, the late static binding concept is used by writing static keyword before using the property. Whenever a PHP interpreter gets the request to compile a function. If it sees any static property, then it leaves the property pending for run time and the property gets its value during runtime from the function it is being called. This is called late static binding.

## Using OOP with MySQL (PDO & MySQLi)


#### PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL databases.

#### So, if you have to switch your project to use another database, PDO makes the process easy. You only have to change the connection string and a few queries. With MySQLi, you will need to rewrite the entire code - queries included.

#### Both are object-oriented, but MySQLi also offers a procedural API.

#### Both support Prepared Statements. Prepared Statements protect from SQL injection, and are very important for web application security.

## Factory Pattern


#### The Factory Method Design Pattern is a creational design pattern that provides an interface for creating objects in a superclass, allowing subclasses to alter the type of objects that will be created. This pattern is particularly useful when the exact types of objects to be created may vary or need to be determined at runtime, enabling flexibility and extensibility in object creation.

## Anonymous Classes


#### As the term "anonymous" suggests, it is a class without a (programmer declared) name. The usual practice is to define a class with a certain identifier, so that it can be used repeatedly. The anonymous class, on the other hand is for one-time use only.

## MVC Architecture


#### he Model-View-Controller (MVC) is an architectural pattern that separates an application into three main logical components: the model, the view, and the controller. Each of these components are built to handle specific development aspects of an application. MVC is one of the most frequently used industry-standard web development framework to create scalable and extensible projects.

## Resources

#### https://medium.com/javascript-scene/the-forgotten-history-of-oop-88d71b9b2d9f

#### https://www.geeksforgeeks.org/difference-between-abstraction-and-encapsulation-in-java-with-examples/

#### https://www.w3schools.com/php/php_oop_inheritance.asp

#### https://www.w3schools.com/php/php_oop_interfaces.asp

#### https://www.w3schools.com/php/php_oop_traits.asp

#### https://www.geeksforgeeks.org/what-is-late-static-bindings-in-php/

#### https://www.w3schools.com/php/php_mysql_connect.asp

#### https://www.geeksforgeeks.org/factory-method-for-designing-pattern/

#### https://www.tutorialspoint.com/php/php_anonymous_classes.htm

#### https://www.tutorialspoint.com/mvc_framework/mvc_framework_introduction.htm

