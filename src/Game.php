<?php

namespace Src;

class Game
{
    private int $number = 1;

    private int $player = 1;

    private array $score = [0, 0];

    public function __construct(
        private FizzBuzz $fizzBuzz
    ) {}

    public function prompt(): string
    {
        return "Player: {$this->player}, Current Number: {$this->number}\nEnter your guess...";
    }

    public function submitResponse(string $input): string
    {
        $isCorrect = $this->fizzBuzz->fizzbuzz($this->number) === trim($input);

        if ($isCorrect) {
            $this->score[$this->player - 1]++;
        }

        $response = $isCorrect
            ? 'Correct'
            : 'Incorrect';

        $this->number++;
        $this->player = $this->player === 1 ? 2 : 1;

        return $response . "\n\n";
    }

    public function score(): array
    {
        return $this->score;
    }
}
