<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function even()
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $answer = prompt("Question: " rand());
    line("Your answer: %s", $answer);
}
