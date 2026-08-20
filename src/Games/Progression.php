<?php

namespace BrainGames\Progression;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\engine;



function progression()
{
    $gameDescription = 'What number is missing in the progression?';
    engine(function () {
        return getQuestionAndAnswer();
    }, $gameDescription);
}
