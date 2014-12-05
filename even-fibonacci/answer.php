<?php

// the ones we know so far
$fibonacciNumbers = [1, 2, 3, 5, 8, 13, 21, 34, 55, 89];

// loop through all numbers from 90 to 4 million

$i = 90;
while ($i <= 4000000) {
    $lastTwo = array_slice($fibonacciNumbers, -2, 2);
    $fibonacciNumbers[] = $i = array_sum($lastTwo);
}

$evenFibonacciNumbers = array_filter(
    $fibonacciNumbers,
    function ($number) {
        return $number %2 === 0;
    }
);
var_dump(array_sum($evenFibonacciNumbers));
