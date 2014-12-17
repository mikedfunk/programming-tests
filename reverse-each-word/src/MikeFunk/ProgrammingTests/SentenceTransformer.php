<?php
/**
 * Defines MikeFunk\ProgrammingTests\SentenceTransformer
 *
 * @package MikeFunk\ProgrammingTests
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace MikeFunk\ProgrammingTests;

/**
 * SentenceTransformer
 *
 * @author Michael Funk <mike@mikefunk.com>
 * @see spec\MikeFunk\ProgrammingTests\SentenceTransformerSpec
 */
class SentenceTransformer
{

    /**
     * reverseWords
     *
     * @param sentence
     * @return string the reversed sentence
     */
    public function reverseWords($sentence)
    {
        // split on spaces
        $words = explode(' ', $sentence);

        $reversedWords = '';
        foreach ($words as $word) {
            // if it ends with a semicolon, colon, comma, or period, save that
            $punctuation = preg_replace("/[\w']+/", '', $word);
            $word = preg_replace("/[^\w^']+/", '', $word);

            // reverse the words and add it to the end with the punctuation at
            // the end
            $reversedWords .= strrev($word) . $punctuation . ' ';
        }
        // return reversed words without the final space
        return preg_replace('/\s$/', '', $reversedWords);
    }
}
