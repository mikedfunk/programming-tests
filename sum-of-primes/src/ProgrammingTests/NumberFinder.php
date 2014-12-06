<?php
/**
 * ProgrammingTests
 *
 * @package ProgrammingTests
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace ProgrammingTests;

/**
 * NumberFinder
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
class NumberFinder
{

    /**
     * getSumOfPrimes
     *
     * @param int $limit (default: 2000000)
     * @return int the sum of primes up to the limit
     */
    public function getSumOfPrimes($limit = 20)
    {
        $sum = 0;

        // start with some known ones
        $primeNumbers = [2, 3, 5, 7, 11];

        // each number from 11 to 2000000
        for ($i = 12; $i < $limit; $i++) {

            // loop through all previous prime numbers
            foreach ($primeNumbers as $primeNumber) {
                // if it's divisible by this lower number, it's not prime
                // don't bother checking the rest
                if ($i % $primeNumber == 0) {
                    continue 2;
                }
            }
            // if it's passed the divisible check on the lower numbers, it's
            // prime
            $primeNumbers[] = $i;
            $sum += $i;
        }
        return $sum;
    }
}
