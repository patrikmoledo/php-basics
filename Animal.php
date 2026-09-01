<?php
// namespaces must be the first thing declared
// namespaces groups related files under a name, its possible to nest namespaces

// namespace Html; // declaring a namespace
// use Html as H; // giving a name space an alias


interface Animal {
    public function makeSound();
}

class Cat implements Animal {
    public static $country = "Japan"; // static property
    public $color;
    public function __construct($color) {
        echo "CAT CONSTRUCTOR: ";
        echo self::$country . "\n"; // accessing a static property inside the method inside the class using self
        self::catsAreAwesome(); // example of calling a static method inside a method inside the class using self
        $this->color = $color;
    }
    public function makeSound() {
        echo "Meow!\n";
    }
    // defining a static (class) method 
    public static function catsAreAwesome() {
        echo "Cats are the best pet animal\n";
    }
}

class Dog implements Animal {
    public function makeSound() {
        echo "Woff!\n";
    }
}

Cat::catsAreAwesome(); // calling a static (class) method
echo Cat::$country . "\n"; // accessing a static property

$cat = new Cat("orange");
$cat->makeSound();

$dog = new Dog();
$dog->makeSound();

// abstract classes and methods, use the abstract keyword to define them, subclasses need to implement the abstract method

// when one or more classes use the same interface it can be referred as polymorphism
// interface methods must be public, can't have properties, can't implement the defined methods (they're abstract)

// traits are methods that can be used in multiple classes, we define them using trait keyword and include them inside the class with use keyword
// one trait definition can have multiple methods defined inside its scope

// a class can implement the Iterator interface so its object can be used in function that requires a iterable
// an iterable can be used as a function parameter, as a return type.