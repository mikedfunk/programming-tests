<?php

// loop from 1 to 100
for ($i = 1; $i <= 100; $i++) {
    switch (true) {
        // if this number is divisible by 3, echo Fizz
        case ($i % 3 === 0):
            echo "Fizz";
            // break intentionally omitted
        case ($i % 5 === 0):
            echo 'Buzz';
            break;
        default:
            // otherwise just echo the number
            echo $i;
            break;

    }
    // make it readable
    echo "\n";
}
