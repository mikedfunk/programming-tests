<?php

namespace ProgrammingTests;

class NumberFinder
{

    /**
     * getSumOfMultiples
     *
     * @param array $multiples (default: [3, 5])
     * @param int $limit (default: 1000)
     * @return int the sum of the multiples
     */
    public function getSumOfMultiples(array $multiples = [3, 5], $limit = 1000)
    {
        // init the product from above
        $sum = 0;

        // loop through all numbers between 9 and 1000, add to total if divisible
        // by 3 or 5
        for ($i = 2; $i < $limit; $i++) {
            foreach ($multiples as $multiple) {
                if ($i % $multiple === 0) {
                    $sum += $i;

                    // only add it once! this is probably the gotcha of the
                    // test.
                    // if it maches 3 *and* 5 don't add it twice!
                    continue 2;
                }
            }
        }
        return $sum;
    }
}
