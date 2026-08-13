<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function engine($win, $round, $rightAnswer)
{
    $answer = prompt('Your answer');
    if ($answer === $rightAnswer) {
        line('Correct!');
        return $round++;
    } else {
        line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
        line("Let's try again, {$name}!");
        $win = false;
        return $win;
    }
}
