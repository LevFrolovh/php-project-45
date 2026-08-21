<?php

namespace BrainGames\Progression;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\engine;

function getProgression()
{
    $start = rand(0, 100);
    $progression[] = $start;
    $step = rand(0, 10);
    $lenght = rand(5, 10);
    for ($i = 1; $i < $lenght; $i++) {
        $progression[$i] = $start + $i * $step;
    }
    return $progression;
}

function getHiddenNum($progression)
{
    $lenght = count($progression);
    $hiddenNumIndex = rand(0, $lenght - 1);
    $hiddenNum = $progression[$hiddenNumIndex];
    return $hiddenNum;
}

function getQuestionAndAnswer()
{
    $progression = getProgression();
    $rightAnswer = getHiddenNum($progression);
    $strProgression = implode(" ", $progression);
    $question = str_replace($rightAnswer, '..', $strProgression);
    return [$question, $rightAnswer];
}

function progression()
{
    $gameDescription = 'What number is missing in the progression?';
    engine(function () {
        return getQuestionAndAnswer();
    }, $gameDescription);
}
