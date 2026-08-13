<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\greetings;
use function BrainGames\Engine\engine;

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
        engine($win, $round, $rightAnswer);
    }
}
