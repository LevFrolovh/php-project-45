<?php

namespace BrainGames/Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\greetings;

function expression()
{
    $num1 = rand(0, 10);
    $num2 = rand(0, 10);
    return "{$num1}+{$num2}";
}

function calc()
{
    $name = greetings();
    line('What is the result of the expression?');
    $round = 0;
    $win = true;
    while ($round < 3) {
        $expression = expression();
        $rightAnswer = (int) $expression;
        line("Question: {$expression}");
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
