<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\greetings;

function engine(callable $getQuestionAndAnswer, $gameDescription)
{
    $name = greetings();
    line($gameDescription);
    
    $round = 0;
    $win = true;
    while ($round < 3 && $win === true) {
        
        [$question, $rightAnswer] = $getQuestionAndAnswer();
        line("Question: {$question}");
        $answer = prompt('Your answer');
        
        if ($answer == $rightAnswer) {
            line('Correct!');
            $round++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, {$name}!");
            $win = false;
        }
    }
    if ($win) {
        line("Congratulations, {$name}!");
    }
}
