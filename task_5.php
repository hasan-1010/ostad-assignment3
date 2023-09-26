<?php
// Task 5: Password Generator
// Create a PHP function called generatePassword($length) that generates a random password of the specified length. 
// The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). 
// Write a PHP program to generate a password with a length of 12 characters using this function and print the password.

function generatePassword(int $length): string
{
    $password = '';
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specials = '!@#$%^&*()_+';

    $password .= $lowercase[rand(0, strlen($lowercase) - 1)];
    $password .= $uppercase[rand(0, strlen($uppercase) - 1)];
    $password .= $numbers[rand(0, strlen($numbers) - 1)];
    $password .= $specials[rand(0, strlen($specials) - 1)];

    $min = 0;
    $max = strlen($chars) - 1;
    $length -= 4;
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand($min, $max)];
    }
    return str_shuffle($password);
}

echo generatePassword(12);
