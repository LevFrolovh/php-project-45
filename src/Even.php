<?php

namespace BrainGames\Even;

require_once __DIR__ . '/Cli.php';

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\greetings;

function isEven($number)
{
    if ($number % 2 === 0) {
        return "yes";
    } else {
        return "no";
    }
}
function even()
{
    $name = greetings();
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $round = 0;
    $win = true;
    while ($round < 3) {
        $number = rand(0, 100);
        $rightAnswer = isEven($number);
        line("Question: {$number}");
        $answer = prompt('Your answer');
        if ($answer === $rightAnswer) {
            line('Correct!');
            $round++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, {$name}!");
            $win = false;
            break;
        }
    }
    if ($win) {
        line("Congratulations, {$name}!");
    }
}
