<?php
/**
 * array tool specification
 *
 * @package ProgrammingTests
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace spec\MikeFunk\ProgrammingTests;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * ArrayToolSpec
 *
 * @uses ObjectBehavior
 * @author Michael Funk <mike@mikefunk.com>
 */
class ArrayToolSpec extends ObjectBehavior
{
    /**
     * it_is_initializable
     *
     * @return void
     */
    public function it_is_initializable()
    {
        $this->shouldHaveType('MikeFunk\ProgrammingTests\ArrayTool');
    }

    /**
     * it_finds_array_values_in_a_deep_array
     *
     * @return void
     */
    public function it_finds_array_values_in_a_deep_array()
    {
        $haystack = [
            'test1',
            'test2',
            'findme',
            'test4' => [
                'test1',
                'test2' => [
                    'findme',
                ],
                'findme',
            ]
        ];
        $expected = 3;
        $needle = 'findme';

        $this->arraySearchDeep($needle, $haystack)
            ->shouldReturn($expected);
    }
}
