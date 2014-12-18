<?php
/**
 * Defines MikeFunk\ProgrammingTests\WordFinder
 *
 * @package MikeFunk\ProgrammingTests
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace MikeFunk\ProgrammingTests;

/**
 * WordFinder
 *
 * @author Michael Funk <mike@mikefunk.com>
 * @see spec\MikeFunk\ProgrammingTests\WordFinderSpec
 */
class WordFinder
{

    /**
     * getWordWithMostVowels
     *
     * @param string $sentence
     * @return string|null the word with the most vowels
     */
    public function getWordWithMostVowels($sentence)
    {
        // strip all punctuation
        $sentence = preg_replace('/[^\w^\s]/', '', $sentence);

        // explode on spaces
        $words = explode(' ', $sentence);

        // loop through, store the number of vowels in each
        $vowelCounts = [];
        foreach ($words as $word) {
            preg_match_all('/[aeiou]/', $word, $matches);
            $vowelCounts[count(array_shift($matches))] = $word;
        }
        // return the biggest one
        ksort($vowelCounts);
        return end($vowelCounts);
    }
}
