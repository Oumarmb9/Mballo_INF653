// Oumar Mballo
// INF 653 Backend I
// 2/6/2025

// Operators and if...else Challenges 
// Challenge 1
<?php
// Define two numbers
$number1 = 10;
$number2 = 5;

// Perform arithmetic operations
$addition = $number1 + $number2;
$subtraction = $number1 - $number2;
$multiplication = $number1 * $number2;
$division = $number1 / $number2;
$modulus = $number1 % $number2;

// Display the results
echo "Number 1: $number1\n";
echo "Number 2: $number2\n";
echo "Addition: $addition\n";
echo "Subtraction: $subtraction\n";
echo "Multiplication: $multiplication\n";
echo "Division: $division\n";
echo "Modulus: $modulus\n";
?>

// Challenge 2
<?php
// Define the input number
$number = 7;

// Check if the number is even or odd
if ($number % 2 == 0) {
    echo "Input: $number\n";
    echo "Output: $number is an even number.\n";
} else {
    echo "Input: $number\n";
    echo "Output: $number is an odd number.\n";
}
?>

//Challenge 3
<?php
// Define the starting number
$number = 10;

echo "Starting number: $number\n";

// Increment the number
$number++;
echo "After increment: $number\n";

// Decrement the number
$number--;
echo "After decrement: $number\n";
?>

//Challenge 4
<?php
// Define the student's marks
$marks = 85;

// Determine the grade based on the marks
if ($marks >= 90) {
    $grade = "A";
} elseif ($marks >= 80) {
    $grade = "B";
} elseif ($marks >= 70) {
    $grade = "C";
} elseif ($marks >= 60) {
    $grade = "D";
} else {
    $grade = "F";
}

// Display the result
echo "Input: $marks\n";
echo "Output: You got a $grade!\n";
?>

//Challenge 5
<?php
// Define the input year
$year = 2024;

// Check if the year is a leap year
if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "Input: $year\n";
    echo "Output: $year is a leap year.\n";
} else {
    echo "Input: $year\n";
    echo "Output: $year is not a leap year.\n";
}
?>

// Syntax and Variables Challenges
// Challenge 1
<?php
// Declare variables
$name = "Oumar Mballo";
$age = 22; 
$favorite_color = "blue"; 
// Display the sentence
echo "My name is $name, I am $age years old and my favorite color is $favorite_color.";
?>

// Challenge 2
<?php
// Using escape characters for quotes
echo "He said, \"PHP is fun!\" and left.\n";

// Using \n for a multi-line message
echo "First line\nSecond line";
?>

// Challenge 3 
<?php
// Declare variables
$greeting = 'Hello';
$age = 25; 

// Display messages
echo "Welcome to the PHP world!\n";
echo "Your age is $age"; 
?>

// Challenge 4 
<?php
// Display message
echo "Welcome to PHP!\n";

// Correct variable declaration
$name = "John"; 

// Corrected string interpolation
echo "Hello, $name";
?>

// Challenge 5 
<?php
// Define the initial price of the product
$price = 50; 

# Define the discount amount
$discount = 10; 

/* 
   Calculate the final price by subtracting 
   the discount from the original price 
*/
$finalPrice = $price - $discount; 

// Display the total price
echo "Total price: $" . $finalPrice; 
?>



