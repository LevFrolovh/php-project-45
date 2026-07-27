<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;
use BrainGames\Cli;
Cli\greetings();

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
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $round = 0;
    while ($round < 3) {
        $win = true;
        $number = rand(0, 100);
        $rightAnswer = isEven($number);
        $answer = prompt("Question: {$number}");
        line("Your answer: %s", $answer);
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
