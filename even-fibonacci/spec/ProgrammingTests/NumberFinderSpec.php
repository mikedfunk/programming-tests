<?php
/**
 *
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
     * it_should_get_sum_of_even_fibonacci_numbers
     *
     * @return void
     */
    public function it_should_get_sum_of_even_fibonacci_numbers()
    {
        $answer = 4613732;
        $limit = 4000000;
        $this->getSumOfEvenFibonacciNumbers($limit)->shouldReturn($answer);
    }
}
