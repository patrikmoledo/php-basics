<?php

// get user operations
$operation = readline("What do you want to do: add, subtract, multiply, divide \n ==> ");

// get first number
// get second number
// create a variable for result
$first = readline("Type your first number: ");
$second = readline("Type your second number: ");
$result = 0;

// perform the operation
switch ($operation) {
    case "add":
        $result = $first + $second;
        break;
    case "subtract":
        $result = $first - $second;
        break;
    case "multiply":
        $result = $first * $second;
        break;
    case "divide": 
        $result = $first / $second;
        break;
    default:
        $result = null; // FIXED: instead o false because 0 is falsy 
}

// output the result
if ($result == null) {
    echo "Invalid operator.\n";
} else {
    echo "Result: $result\n";
}