<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\greetings;
use function BrainGames\Engine\engine;

function isEven($number)
{
    return $number % 2 === 0 ? "yes" : "no";
}

function getQuestionAndAnswer()
{
    $number = rand(0, 100);
    $question = $number;
    $rightAnswer = isEven($question);
    return [$question, $rightAnswer];
}

function even()
{
    $gameDescription = 'Answer "yes" if the number is even, otherwise answer "no".';
    $getQuestionAndAnswer = getQuestionAndAnswer();
    engine($getQuestionAndAnswer, $gameDescription);
}
