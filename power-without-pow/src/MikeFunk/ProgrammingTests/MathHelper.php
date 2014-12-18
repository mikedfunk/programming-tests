<?php
/**
 * Defines MikeFunk\ProgrammingTests\MathHelper
 *
 * @package MikeFunk\ProgrammingTests
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace MikeFunk\ProgrammingTests;

/**
 * MathHelper
 *
 * @author Michael Funk <mike@mikefunk.com>
 * @see spec\MikeFunk\ProgrammingTests\MathHelperSpec
 */
class MathHelper
{

    /**
     * getNumberToPower
     *
     * @param int $number
     * @param int $power
     * @return int the number to the power
     */
    public function getNumberToPower($number, $power)
    {
        // multiply it by itself $power number of times
        for ($i = 2; $i <= $power; $i++) {
            $number *= $number;
        }

        return $number;
    }
}
