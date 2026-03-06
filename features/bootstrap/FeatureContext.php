<?php

use Behat\Behat\Context\Context;
use Src\FizzBuzz;

class FeatureContext implements Context
{
    private FizzBuzz $fizzBuzz;
    private string $result = '';

    /**
     * @Given I have a FizzBuzz game
     */
    public function iHaveAFizzBuzzGame(): void
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    /**
     * @When I play with number :number
     */
    public function iPlayWithNumber(int $number): void
    {
        $this->result = $this->fizzBuzz->fizzbuzz($number);
    }

    /**
     * @Then the response should be :expected
     */
    public function theResponseShouldBe(string $expected): void
    {
        if ($this->result !== $expected) {
            throw new \RuntimeException(sprintf(
                'Expected "%s" but got "%s"',
                $expected,
                $this->result
            ));
        }
    }
}
