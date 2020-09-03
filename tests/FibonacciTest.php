<?php


namespace Flix;

use PHPUnit\Framework\TestCase;
use RangeException;

class FibonacciTest extends TestCase
{
    private Fibonacci $validator;

    protected function setUp() : void
    {
        $this->validator = new Fibonacci();
    }

    /*
     * Numbers less than 0 should return valid result
     */
    public function testPositiveNumber() : void
    {
        $this->assertEquals(8, $this->validator->getNumber(6));
    }

    /*
     * 0 should return valid number i.e. 0
     */
    public function testZeroIndex() : void
    {
        $this->assertEquals(0, $this->validator->getNumber(0));
    }

    /*
     * Numbers less than 0 should return valid result
     */
    public function testNegativeNumber() : void
    {
        $this->assertEquals(13, $this->validator->getNumber(-7));
    }

    /*
     * Numbers that exceeds max integer limit should return Exception
     * e.g 100th index return number greater than max integer range
     *
     */
    public function testTooLargeInteger() : void
    {
        $this->expectException(RangeException::class);
        $this->validator->getNumber(100);
    }
}
