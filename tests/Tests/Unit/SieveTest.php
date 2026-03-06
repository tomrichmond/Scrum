<?php

namespace Tests\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Src\Sieve;

class SieveTest extends TestCase
{
    public function testReturnsEmptyListForNumbersLessThanTwo()
    {
        $sieve = new Sieve();

        $this->assertEquals([], $sieve->getPrimes(0));
        $this->assertEquals([], $sieve->getPrimes(1));
    }

    public function testReturnsPrimesUpToTen()
    {
        $sieve = new Sieve();

        $this->assertEquals([2, 3, 5, 7], $sieve->getPrimes(10));
    }

    public function testReturnsPrimesUpToThirty()
    {
        $sieve = new Sieve();

        $this->assertEquals([2, 3, 5, 7, 11, 13, 17, 19, 23, 29], $sieve->getPrimes(30));
    }
}
