<?php

namespace BrainGames\Even;

use function even\line;
use function even\prompt;

function even()
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $answer = prompt("Question: 15");
    line("Your answer: %s", $answer);
}
