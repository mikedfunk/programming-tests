<?php
/**
 * tool for arrays
 *
 * @package ProgrammingTests
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace MikeFunk\ProgrammingTests;

/**
 * ArrayTool
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
class ArrayTool
{

    /**
     * arraySearchDeep
     *
     * @param string $needle
     * @param array $haystack
     * @return int the number of matches
     */
    public function arraySearchDeep($needle, $haystack)
    {
        $count = 0;

        foreach ($haystack as $item) {
            // if it's an array, call this function recursively and add to
            // the count
            if (is_array($item)) {
                $count += $this->arraySearchDeep($needle, $item);
                continue;
            }
            // otherwise just search for the value and add the match count
            $count += $item == $needle ? 1 : 0;
        }

        return $count;
    }
}
