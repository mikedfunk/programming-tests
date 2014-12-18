<?php
/**
 * Specification unit test for MikeFunk\ProgrammingTests\MathHelper
 *
 * @package spec\MikeFunk\ProgrammingTests
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace spec\MikeFunk\ProgrammingTests;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * MathHelperSpec
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
class MathHelperSpec extends ObjectBehavior
{

    /**
     * it_is_initializable
     *
     * @return void
     */
    public function it_is_initializable()
    {
        $this->shouldHaveType('MikeFunk\ProgrammingTests\MathHelper');
    }

    /**
     * it_gets_x_to_y_power
     *
     * @return void
     */
    public function it_gets_x_to_y_power()
    {
        $baseNumber = 4;
        $power = 2;
        $answer = 16;
        $this->getNumberToPower($baseNumber, $power)->shouldReturn($answer);
    }
}
