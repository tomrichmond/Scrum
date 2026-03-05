<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Src\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    public function test_fizz()
    {
        $fizzbuzz = new FizzBuzz();

        $this->assertEquals('Fizz', $fizzbuzz->fizzbuzz(3));
        $this->assertEquals('Fizz', $fizzbuzz->fizzbuzz(9));
    }

    public function test_buzz()
    {
        $fizzbuzz = new FizzBuzz();

        $this->assertEquals('Buzz', $fizzbuzz->fizzbuzz(5));
        $this->assertEquals('Buzz', $fizzbuzz->fizzbuzz(20));
    }

    public function test_fizzbuzz_returns_number_if_not_fizz_or_buzz()
    {
        $fizzbuzz = new FizzBuzz();

        $this->assertEquals('1', $fizzbuzz->fizzbuzz(1));
        $this->assertEquals('2', $fizzbuzz->fizzbuzz(2));
    }

    public function test_fizzbuzz()
    {
        $fizzbuzz = new FizzBuzz();

        $this->assertEquals('FizzBuzz', $fizzbuzz->fizzbuzz(15));
        $this->assertEquals('FizzBuzz', $fizzbuzz->fizzbuzz(30));
    }
}
