<?php
/**
 * number finder
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
     * it_should_get_sum_of_multiples
     *
     * @return void
     */
    public function it_should_get_sum_of_multiples()
    {
        $answer = 233168;
        $limit = 1000;
        $multiples = [3, 5];
        $this->getSumOfMultiples($multiples, $limit)->shouldReturn($answer);
    }
}
