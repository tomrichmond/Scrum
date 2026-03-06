<?php

namespace Tests\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Src\FizzBuzz;
use Src\Game;

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

    public function test_score_is_zero_at_start_of_game()
    {
        $game = new Game(new FizzBuzz());

        $this->assertEquals([0, 0], $game->score());
    }

    public function test_player_1_has_score_of_one_after_one_correct_result()
    {
        $game = new Game(new FizzBuzz());

        $game->submitResponse('1');

        $this->assertEquals([1, 0], $game->score());
    }

    public function test_player_2_has_score_of_one_after_one_correct_result()
    {
        $game = new Game(new FizzBuzz());

        // Player 1.
        $game->submitResponse('2');

        // Player 2.
        $game->submitResponse('2');

        $this->assertEquals([0, 1], $game->score());
    }

    public function test_both_players_have_score_of_one_after_one_correct_response_each()
    {
        $game = new Game(new FizzBuzz());

        $game->submitResponse('1');
        $game->submitResponse('2');

        $this->assertEquals([1, 1], $game->score());
    }
}
