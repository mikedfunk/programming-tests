<?php
/**
 * file class
 *
 * @package ProgrammingTests
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace ProgrammingTests;

/**
 * File
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
class File
{

    /**
     * getProductDetails
     *
     * @param string $fileName
     * @return array the brand, product, and id
     */
    public function getProductDetails($fileName)
    {
        // get rid of the possible "copy" or " - copy" text
        // this way we don't have to worry about dash or space separation
        $fileName = preg_replace('/( - )?copy/', '', $fileName);

        // now match the rest
        $regex = "/([:\w-\s]+)[-\s](\w+)[-\s](\d+)\..*/";
        preg_match($regex, $fileName, $matches);

        // get rid of the first element which is the whole thing
        array_shift($matches);

        return $matches;
    }
}
