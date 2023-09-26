<?php
// Task 2: Array Manipulation
// Create an array called $numbers containing the numbers 1 to 10. 
// Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array.

function arrayManipulation(array $numbers): array
{
    return array_filter($numbers, fn ($number) => $number % 2);
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
print_r(arrayManipulation($numbers));
// Output: [1,3,5,7,9]