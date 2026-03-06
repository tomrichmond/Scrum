#!/usr/bin/env php
<?php

use Src\FizzBuzz;
use Src\Game;

require __DIR__ . '/../vendor/autoload.php';

$fizzBuzz = new FizzBuzz();
$game = new Game($fizzBuzz);

echo "FizzBuzz - Play in Turns\n";
echo "Type Ctrl+C to quit.\n\n";

while (true) {
    echo $game->prompt();
    $input = fgets(STDIN);

    echo $game->submitResponse($input);
}
