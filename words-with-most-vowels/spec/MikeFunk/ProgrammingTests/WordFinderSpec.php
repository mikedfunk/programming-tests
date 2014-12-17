<?php
/**
 * Specification unit test for MikeFunk\ProgrammingTests\WordFinder
 *
 * @package ProgrammingTests
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace spec\MikeFunk\ProgrammingTests;

use PhpSpec\ObjectBehavior;

/**
 * WordFinderSpec
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
class WordFinderSpec extends ObjectBehavior
{

    /**
     * it_is_initializable
     *
     * @return void
     */
    public function it_is_initializable()
    {
        $this->shouldHaveType('MikeFunk\ProgrammingTests\WordFinder');
    }

    /**
     * it_gets_word_with_most_vowels
     *
     * @return void
     */
    public function it_gets_word_with_most_vowels()
    {
        $wordWithMostVowels = 'doorway';
        $sentence = 'open, the doorway to the stairs.';
        $this->getWordWithMostVowels($sentence)
            ->shouldReturn($wordWithMostVowels);
    }
}
