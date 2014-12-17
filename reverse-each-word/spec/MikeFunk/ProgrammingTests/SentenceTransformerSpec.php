<?php
/**
 * Specification unit test for MikeFunk\ProgrammingTests\SentenceTransformer
 *
 * @package MikeFunk\ProgrammingTests
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace spec\MikeFunk\ProgrammingTests;

use PhpSpec\ObjectBehavior;

/**
 * SentenceTransformerSpec
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
class SentenceTransformerSpec extends ObjectBehavior
{

    /**
     * it_is_initializable
     *
     * @return void
     */
    public function it_is_initializable()
    {
        $this->shouldHaveType('MikeFunk\ProgrammingTests\SentenceTransformer');
    }

    /**
     * it_reverses_each_word
     *
     * @return void
     */
    public function it_reverses_each_word()
    {
        $sentence = 'Hi, I am Joe.';
        $reversed = 'iH, I ma eoJ.';
        $this->reverseWords($sentence)
            ->shouldReturn($reversed);
    }
}
