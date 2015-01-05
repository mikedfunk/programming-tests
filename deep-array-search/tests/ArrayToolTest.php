<?php
/**
 * array tool phpunit test
 *
 * @package ProgrammingTests
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
use MikeFunk\ProgrammingTests\ArrayTool;

/**
 * ArrayToolTest
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
class ArrayToolTest extends PHPUnit_Framework_TestCase
{

    /**
     * setUp
     *
     * @return void
     */
    public function setUp()
    {
        $this->arrayTool = new ArrayTool();
    }

    /**
     * testArraySearchDeep
     *
     * @return void
     */
    public function testArraySearchDeep()
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

        // call and assert
        $actual = $this->arrayTool->arraySearchDeep($needle, $haystack);
        $this->assertEquals($expected, $actual);
    }
}
