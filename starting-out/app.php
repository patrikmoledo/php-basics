<?php

echo phpversion() . "\n";

echo var_dump(2);
echo var_dump(true);
echo var_dump("Patrik");
$null_example;
echo var_dump($null_example);

echo strlen("Hello") . "\n";
echo str_word_count("PHP is great!") . "\n";
echo str_contains("PHP is great!", "PHP" . "\n");
echo strtoupper("hello") . "\n"; // strtolower()
echo str_replace("PHP", "Ruby", "PHP is awesome!") . "\n";
echo strrev("Hello World") . "\n";
echo trim("         something with with space around      ") . "\n";
$string_to_array = explode(" ", "My favorite programming language is Ruby");
echo "transformed a string into an array." . "\n";
echo substr("My name is Patrik", 3, 4) . "\n"; // can also specify from one number to end; use negative length

echo is_int(2) . "\n";
// PHP_INT_MAX, PHP_INT_MIN, PHP_INT_SIZE constants
echo is_float(10.5) . "\n";
// PHP_FLOAT_MAX, PHP_FLOAT_MIN, PHP_FLOAT_DIG, PHP_FLOAT_EPSILON
echo intval(4.3) . "\n";

$number = 30;
$number = (string) $number; // (int) (float) (array) (bool) (object) (string)
echo var_dump($number) . "\n";
// "", 0 and NULL are falsy when casting to boolean

echo pi() . "\n";
echo(min(0, 150, -8, -200)) . "\n";
echo(max(0, 150, -8, -200)) . "\n";
echo(abs(-6.7)) . "\n";
echo(sqrt(64)) . "\n";
echo(round(3.60)) . "\n";
echo(round(0.49)) . "\n";
echo rand(0, 10) . "\n"; // includes 0 and 10

define("FAVORITE_LANG", "Ruby"); // constant definition (doesn't work for classes)
echo "My favorite programming language is " . FAVORITE_LANG . "\n";
const NATIONALITY = "Brazil"; // can only be defined at top level scope
echo "Nationality: " . NATIONALITY . "\n";
// there is also array constants, can be created with defined() and const keyword

echo __DIR__ . "\n";
// nine magic constants: __DIR__ __CLASS__ __FILE__ __FUNCTION__ 
// nine magic constants: __LINE__ __METHOD__ __NAMESPACE__ __TRAIT__ ClassName::class

$age = 20;
if ($age >= 60) {
    echo "You are $age, voting is optional." . "\n";
    } elseif ($age >= 18) {
    echo "You are $age, you can vote." . "\n";
} else {
    echo "You are $age, you can't vote" . "\n";
}

if ($age >= 18) echo "You are older than 18 (or exactly 18)." . "\n";

$ternary_example = 20 % 2 == 0 ? "even number checked \n" : "odd number checked \n";
echo $ternary_example;

# its also possible to nest if statements

$favcolor = "orange";

switch ($favcolor) {
    case "red":
        echo "red is your favorite color \n";
        break;
    case "blue":
        echo "blue is your favorite color \n";
        break;
    case "green":
        echo "green is your favorite color \n";
        break;
    default:
        echo "$favcolor is invalid. The only colors that are being considered in this small program are: red, blue and green. \n";
}

$favorite_programming_language = "PHP";

# switch statement modern alternative, it breaks and returns a value automatically, also use strict comparison
$lang_text = match($favorite_programming_language) {
    "PHP" => "Your favorite programming language is PHP",
    "Python" => "Your favorite programming language is Python",
    "Java" => "Your favorite programming language is Java",
    "Ruby" => "Your favorite programming language is Ruby",
    default => "This programming language is not valid",
};
echo $lang_text . "\n";

// LOOPS: WHILE, DO WHILE, FOR, FOREACH

$while_example = 0;
// do {} while (){} is also available in PHP
while ($while_example < 100) {
    // using break inside a loop with an if statement
    $while_example += 10;
    if ($while_example == 60) break; // we can also use continue to skip only one iteration
    echo $while_example;
}
echo "\n";

for ($i = 1; $i <= 5; $i++) {
    // we can also use break and continue
    echo "The number is: $i \n";
}

$countries = array("Japan", "Brazil", "Canada", "Chile", "Thailand");
foreach ($countries as $country) {
    echo "$country \n";
}

$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach ($members as $key => $value) {
  echo "$key : $value \n";
}

// FUNCTIONS

function fullname($first, $last) {
    return "$first $last";
}
$fullname = fullname("John", "Lennon");
echo $fullname . "\n";

function displayMessage($message = "Hello World") {
    echo $message . "\n";
}
displayMessage("PHP is awesome");

$mynumber = 10;
function addFive(&$value) {
    echo "adding five to $value... \n";
    $value +=5;
}
addFive($mynumber);
echo $mynumber . "\n";

// variadic function, looks like the spread operator but it isn't
function sumMyNumbers(...$x) {
    $sum = 0;
    $len = count($x);
    for ($i = 0; $i < $len; $i++) {
        $sum += $x[$i];
    }
    return $sum;
}
echo sumMyNumbers(5,10,2) . "\n";

// there is also a way of declare data types in PHP with <?php declare(strict_types = 1);
// int the example below we declare the parameters and the return types
// function addNumbers(int $num1, int $num2) : int {}

// ARRAYS

$cars = array("Volvo", "BMW", "Toyota"); // create with older syntax, usually its done with []

echo $cars[0] . "\n"; // access
$cars[0] = "Audi"; // update
array_push($cars, "Suzuki", "Lexus"); // add
array_pop($cars); // removes last(Lexus)
array_shift($cars); // removes first(Audi)

foreach ($cars as $car) {
    echo "$car \n";
}

$mycar = ["brand" => "Honda", "model" => "N-Box", "year" => "2014"]; // create
echo $mycar["year"] . "\n"; // access
$mycar["year"] = "2021"; // update
$mycar["color"] = "Red"; // add
unset($mycar["year"]); //remove

foreach ($mycar as $key => $value) {
    echo "$key: $value \n";
}

// []="item" array_push() []+= array_unshift() array_splice() array_merge()
// REMOVE array_splice() unset() array_diff() array_pop() array_shift()

$numbers = [20, 5, 33, 1, 2];
sort($numbers);
foreach ($numbers as $number) {
    echo $number . "\n";
}
print_r($numbers);
// sort() rsort() asort() ksort() arsort() krsort()

// arrays can also be multidimensional
// php superglobals: built-in variables that are always accessible in all scopes