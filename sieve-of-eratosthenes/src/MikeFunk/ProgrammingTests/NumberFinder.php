<?php
/**
 * Defines MikeFunk\ProgrammingTests\NumberFinder
 *
 * @package MikeFunk\ProgrammingTests
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace MikeFunk\ProgrammingTests;

/**
 * NumberFinder
 *
 * @author Michael Funk <mike@mikefunk.com>
 * @see spec\MikeFunk\ProgrammingTests\NumberFinderSpec
 */
class NumberFinder
{

    /**
     * getPrimeNumbers
     *
     * @param int $limit don't return any prime numbers higher than this
     * @return array all prime numbers up to the limit
     */
    public function getPrimeNumbers($limit)
    {
        // start with the pointer at 2, the first prime
        $pointer = 2;

        // store all integers from 2 to the limit
        // save them in the keys so we can use the value for marked
        $integers = array_flip(range($pointer, $limit));

        // go through all integers between here and the limit
        foreach ($integers as $integer => $isMarked) {
            // mark all multiples of the pointer between here and the limit
            for ($i = $pointer; $i * $pointer <= $limit; $i++) {
                $integers[$pointer * $i] = 'marked';
            }

            // go to the next unmarked value greater than p
            foreach ($integers as $key => $value) {
                if ($key > $pointer && $value != 'marked') {
                    $pointer = $key;
                    break;
                }
            }
        }

        // if p is at the limit, return the unmarked numbers in an array
        return array_keys(
            array_filter(
                $integers,
                function ($value) {
                    return $value !== 'marked';
                }
            )
        );
    }
}
