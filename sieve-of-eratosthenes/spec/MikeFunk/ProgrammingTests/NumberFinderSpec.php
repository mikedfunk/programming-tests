<?php
/**
 * Specification unit test for MikeFunk\ProgrammingTests\NumberFinder
 *
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace spec\MikeFunk\ProgrammingTests;

use PhpSpec\ObjectBehavior;

/**
 * NumberFinderSpec
 *
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
        $this->shouldHaveType('MikeFunk\ProgrammingTests\NumberFinder');
    }

    /**
     * it_gets_all_prime_numbers
     *
     * @return void
     */
    public function it_gets_all_prime_numbers()
    {
        $expected = [2, 3, 5, 7, 11];
        $limit = 11;
        $this->getPrimeNumbers($limit)->shouldReturn($expected);
    }
}
