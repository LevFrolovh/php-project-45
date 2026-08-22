<?php

namespace BrainGames\Prime;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\engine;

function isPrime($number)
{
    if ($number <= 1) {
        return 'no';
    }
    if ($number > 3) {
        if ($number % 2 === 0 || $number % 3 === 0) {
            return 'no';
        } else {
            for ($i = 5; $i * $i <= $number; $i += 2) {
                if ($number % $i === 0) {
                    return 'no';
                }
            }
        }
    }
    return 'yes';
}

function getQuestionAndAnswer()
{
    $number = rand(-100, 100);
    $question = $number;
    $rightAnswer = isPrime($number);
    return [$question, $rightAnswer];
}

function prime()
{
    $gameDescription = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    engine(function () {
        return getQuestionAndAnswer();
    }, $gameDescription);
}
