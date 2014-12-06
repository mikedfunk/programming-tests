<?php
/**
 * Fizzbuzz test
 *
 * @package ProgrammingTests
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace spec\ProgrammingTests;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * StringMakerSpec
 *
 * @uses ObjectBehavior
 * @author Michael Funk <mike@mikefunk.com>
 */
class StringMakerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('ProgrammingTests\StringMaker');
    }

    /**
     * it_should_get_fizzbuzz
     *
     * @return void
     */
    public function it_should_get_fizzbuzz()
    {
        $answer = '1
2
FizzBuzz
4
Buzz
FizzBuzz
7
8
FizzBuzz
Buzz
11
FizzBuzz
13
14
FizzBuzz
16
17
FizzBuzz
19
Buzz
FizzBuzz
22
23
FizzBuzz
Buzz
26
FizzBuzz
28
29
FizzBuzz
31
32
FizzBuzz
34
Buzz
FizzBuzz
37
38
FizzBuzz
Buzz
41
FizzBuzz
43
44
FizzBuzz
46
47
FizzBuzz
49
Buzz
FizzBuzz
52
53
FizzBuzz
Buzz
56
FizzBuzz
58
59
FizzBuzz
61
62
FizzBuzz
64
Buzz
FizzBuzz
67
68
FizzBuzz
Buzz
71
FizzBuzz
73
74
FizzBuzz
76
77
FizzBuzz
79
Buzz
FizzBuzz
82
83
FizzBuzz
Buzz
86
FizzBuzz
88
89
FizzBuzz
91
92
FizzBuzz
94
Buzz
FizzBuzz
97
98
FizzBuzz
Buzz
';
        $limit = 100;
        $this->getFizzBuzz($limit)->shouldReturn($answer);
    }
}
