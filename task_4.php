<?php
// Task 4: Multidimensional Array
// Create a multidimensional array called $studentGrades to store the grades of three students. 
// Each student has grades for three subjects: Math, English, and Science. 
// Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.

function gradeCalc(array $studentGrades)
{
    foreach ($studentGrades as $key => $grades) {
        $total = 0;
        foreach ($grades as $grade) {
            $total += $grade;
        }
        printf("Average Grade of student%d is %.2f\n", $key + 1, $total / 3);
    }
}

$studentGrades = [
    [
        'Math' => 98,
        'English' => 80,
        'Science' => 76
    ],
    [
        'Math' => 88,
        'English' => 71,
        'Science' => 96
    ],
    [
        'Math' => 68,
        'English' => 90,
        'Science' => 66
    ],
];

gradeCalc($studentGrades);
// Output
/*
Average Grade of student1 is 84.67
Average Grade of student2 is 85.00
Average Grade of student3 is 74.67 
*/