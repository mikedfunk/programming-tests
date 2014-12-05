<?php

// init the product from above
$sum = 3 + 5 + 6 + 9;

// loop through all numbers between 9 and 1000, add to total if divisible
// by 3 or 5
for ($i = 10; $i < 1000; $i++) {
    if ($i %3 === 0 || $i % 5 === 0) {
        $sum += $i;
    }
}
echo $sum;
