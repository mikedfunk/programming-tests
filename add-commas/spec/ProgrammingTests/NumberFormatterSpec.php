<?php
/**
 * number formatter specification
 *
 * @package ProgrammingTests
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace spec\ProgrammingTests;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * NumberFormatterSpec
 *
 * @uses ObjectBehavior
 * @author Michael Funk <mike@mikefunk.com>
 */
class NumberFormatterSpec extends ObjectBehavior
{
    /**
     * it_is_initializable
     *
     * @access public
     * @return void
     */
    public function it_is_initializable()
    {
        $this->shouldHaveType('ProgrammingTests\NumberFormatter');
    }

    /**
     * it_should_add_commas_to_a_number
     *
     * @return void
     */
    public function it_should_add_commas_to_a_number()
    {
        $numbers = [
            1000000 => '1,000,000',
            9502    => '9,502',
            15      => '15',
        ];

        // loop throught numbers, compare before to after
        foreach ($numbers as $numberBefore => $numberAfter) {
            $this->addCommas($numberBefore)->shouldReturn($numberAfter);
        }
    }
}
