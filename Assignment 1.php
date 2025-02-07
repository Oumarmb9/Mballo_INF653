// Oumar Mballo
// INF 653 Backend I
// 2/6/2025


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


