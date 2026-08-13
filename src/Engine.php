<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function engine($rightAnswer)
{
    $answer = prompt('Your answer');
    if ($answer === $rightAnswer) {
        line('Correct!');
        $round++;
        return $round;
    } else {
        line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
        line("Let's try again, {$name}!");
        $win = false;
        return $win;
    }
}
