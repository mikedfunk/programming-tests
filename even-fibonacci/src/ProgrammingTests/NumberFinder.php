<?php
/**
 * fibonacci numbers test
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
     * getSumOfEvenFibonacciNumbers up to 4 million
     *
     * @param int $limit only up to this number
     * @return int
     */
    public function getSumOfEvenFibonacciNumbers($limit = 4000000)
    {
        // the ones we know so far
        $fibonacciNumbers = [1, 2, 3, 5, 8, 13, 21, 34, 55, 89];

        // loop through all numbers from 90 to 4 million
        $i = 90;
        while ($i <= $limit) {
            $lastTwo = array_slice($fibonacciNumbers, -2, 2);
            $fibonacciNumbers[] = $i = array_sum($lastTwo);
        }

        // filter down to just the even ones
        $evenFibonacciNumbers = array_filter(
            $fibonacciNumbers,
            function ($number) {
                return $number % 2 === 0;
            }
        );

        // return the sum
        return array_sum($evenFibonacciNumbers);
    }
}
