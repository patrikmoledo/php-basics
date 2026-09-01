<?php

// methods and classes can be created using the final keyword, prevents class inheritance or method overriding
class Fruit {
    // properties/state definition
    const WRITTENBY= "Written by Patrik Moledo \n\n"; // class constant example, it is public by default
    // self::WRITTENBY can be used to access from inside the class
    public $name; // can be accessed with $this->name from outside
    protected $color; // can only be accessed with a method from outside

    // access modifiers for properties and methods: 
    // public can be accessed everywhere (default)
    // protected can be accessed in the class and subclasses
    // private can be only accessed in the class

    // constructors run when we call new Fruit() to instantiate an object with the properties
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    // destructors runs when an object is destroyed or when the script finishes execution
    public function __destruct() {
        echo "DESTRUCTING: \nName: $this->name || Color: $this->color\n\n";
    }

    public function getDetails() {
        echo "DETAILS: \nName: $this->name\nColor: $this->color\n\n";
    }
}

// using inheritance example, extends keyword
class Strawberry extends Fruit {
    protected $countryOfOrigin;
    // overriding superclass constructor method example
    public function __construct($name, $color, $countryOfOrigin) {
        $this->name = $name;
        $this->color = $color;
        $this->countryOfOrigin = $countryOfOrigin;
    }
    // overriding superclass method example
    public function getDetails() {
        echo "SUBCLASS DETAILS: \nName: $this->name\nColor: $this->color\nCountry of origin: $this->countryOfOrigin\n\n";
    }
    public function message() {
        echo "Am I a fruit or a berry? \n\n";
    }
}

echo Fruit::WRITTENBY; // accessing a class constant from outside the class

$apple = new Fruit("Apple", "Green"); // instance creation
$apple->getDetails(); // accessing protected or private properties

$banana = new Fruit("Banana", "Yellow");
var_dump($banana instanceof Fruit); // checking if an instance belongs to a class
echo "\n";

$strawberry = new Strawberry("Strawberry", "Red", "Japan");
$strawberry->getDetails(); // using method inherited from a superclass class
$strawberry->message(); // using method created in the subclass

