<?php
/**
 * file class spec
 *
 * @package ProgrammingTests
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace spec\ProgrammingTests;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * FileSpec
 *
 * @uses ObjectBehavior
 * @author Michael Funk <mike@mikefunk.com>
 */
class FileSpec extends ObjectBehavior
{
    /**
     * it_is_initializable
     *
     * @return void
     */
    public function it_is_initializable()
    {
        $this->shouldHaveType('ProgrammingTests\File');
    }

    /**
     * it_will_get_the_id_product_and_brand
     *
     * @return void
     */
    public function it_will_get_the_id_product_and_brand()
    {
        // the original filename and the expected answer
        $dataProviders = [
            'chanel-handbag-11504.jpg' => ['chanel', 'handbag', '11504'],
            'chanel-handbag-11504.JPEG' => ['chanel', 'handbag', '11504'],
            'louis-vitton-handbag-11504.gif' => ['louis-vitton', 'handbag', '11504'],
            'louis vitton handbag 11504.gif' => ['louis vitton', 'handbag', '11504'],
            'louis vitton handbag 11504copy.gif' => ['louis vitton', 'handbag', '11504'],
            'louis vitton handbag 11504 - copy.gif' => ['louis vitton', 'handbag', '11504'],
        ];

        // loop through providers and test them
        foreach ($dataProviders as $fileName => $answer) {
            $this->getProductDetails($fileName)->shouldReturn($answer);
        }
    }
}
