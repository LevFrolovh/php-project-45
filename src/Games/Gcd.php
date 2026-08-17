<?php

namespace BrainGames\Gcd;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\engine;

function expression()
{
    $num1 = rand(0, 100);
    $num2 = rand(0, 100);
    return "{$num1} {$num2}";
}

function getGcd($expression)
{
    $numbers = explode(" ", $expression);
    $max = max($numbers);
    $min = min($numbers);
    $gcd = 1;
    $divisors = [];

    if ($max % $min === 0) {
        $gcd = $min;
    } else {
        if ($min % 2 === 0) {
            $divisors[] = 2;
            $divisors[] = $min / 2;
        }
        if ($min % 3 === 0) {
            $divisors[] = 3;
            $divisors[] = $min / 3;
        }
        if ($min % 11 === 0) {
            $divisors[] = 11;
            $divisors[] = $min / 11;
        }
        rsort($divisors);
        foreach ($divisors as $div) {
            if ($max % $div === 0) {
                $gcd = $div;
                break;
            }
        }
    }
    return $gcd;
}

function getQuestionAndAnswer()
{
    $question = expression();
    $rightAnswer = getGcd($question);
    return [$question, $rightAnswer];
}

function gcd()
{
    $gameDescription = 'Find the greatest common divisor of given numbers.';
    engine(function() {
        return getQuestionAndAnswer();
    }, $gameDescription);
}
