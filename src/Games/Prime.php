<?php

namespace BrainGames\Prime;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\engine;

function prime()
{
    $gameDescription = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    engine(function () {
        return getQuestionAndAnswer();
    }, $gameDescription);
}
