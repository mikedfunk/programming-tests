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
        // match just the things we need
        $regex = "/([\w-\s]+)[-\s](\w+)[-\s](\d+)(?:(?:\s-\s)?copy)?\.(?:JPEG|jpg|gif)/";
        preg_match($regex, $fileName, $matches);

        // get rid of the first element which is the whole thing
        array_shift($matches);

        return $matches;
    }
}
