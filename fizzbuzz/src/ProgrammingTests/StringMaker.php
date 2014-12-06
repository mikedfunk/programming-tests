<?php
/**
 * programming tests
 *
 * @package ProgrammingTests
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace ProgrammingTests;

/**
 * StringMaker
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
class StringMaker
{

    /**
     * getFizzBuzz
     *
     * @param int $limit (default: 100)
     * @return string
     */
    public function getFizzBuzz($limit = 100)
    {
        // loop from 1 to the limit
        $return = '';
        for ($i = 1; $i <= $limit; $i++) {
            switch (true) {
                // if this number is divisible by 3, echo Fizz
                case ($i % 3 === 0):
                    $return .= "Fizz";
                    // break intentionally omitted
                case ($i % 5 === 0):
                    $return .= 'Buzz';
                    break;
                default:
                    // otherwise just echo the number
                    $return .= $i;
                    break;

            }
            // make it readable
            $return .= "\n";
        }

        return $return;
    }
}
