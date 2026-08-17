<?php

namespace BrainGames\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\engine;

function expression()
{
    $num1 = rand(0, 100);
    $num2 = rand(0, 100);
    $operators = '+-*';
    $operator = $operators[rand(0, 2)];
    return "{$num1} {$operator} {$num2}";
}

function getQuestionAndAnswer()
{
    $question = expression();
    $rightAnswer = eval("return {$question};");
    return [$question, $rightAnswer];
}

function calc()
{
    $gameDescription = 'What is the result of the expression?';
    engine(function () {
        return getQuestionAndAnswer();
    }, $gameDescription);
}
