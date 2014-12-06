<?php
/**
 * sum of primes test
 *
 * @package ProgrammingTests
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace spec\ProgrammingTests;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * NumberFinderSpec
 *
 * @uses ObjectBehavior
 * @author Michael Funk <mike@mikefunk.com>
 */
class NumberFinderSpec extends ObjectBehavior
{
    /**
     * it_is_initializable
     *
     * @return void
     */
    public function it_is_initializable()
    {
        $this->shouldHaveType('ProgrammingTests\NumberFinder');
    }

    /**
     * it_gets_sum_of_primes
     *
     * @return void
     */
    public function it_gets_sum_of_primes()
    {
        $numbers = [
            10 => 17,
            20 => 77,
            // this will take a long time...
            2000000 => 142913828922,
        ];

        foreach ($numbers as $limit => $answer) {
            $this->getSumOfPrimes($limit)->shouldReturn($answer);
        }
    }
}
