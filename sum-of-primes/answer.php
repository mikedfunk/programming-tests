<?php

// start with some known ones
$primeNumbers = [2, 3, 5, 7, 11];

// each number from 11 to 2000000
for ($i = 12; $i < 2000000; $i++) {

    // loop through all previous prime numbers
    foreach ($primeNumbers as $primeNumber) {
        // if it's divisible by this lower number, it's not prime
        if ($i % $primeNumber == 0) {
            continue 2;
        }
    }
    // if it's passed the divisible check on the lower numbers, it's prime
    $primeNumbers[] = $i;
    echo "$i\n";
}
