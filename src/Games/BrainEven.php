<?php

namespace BrainGames\Even;

function setCondition(): string
{
    return 'Answer "yes" if the number is even, otherwise answer "no".';
}

function generateQuestionsAndAnswers(int $countQuestion): array
{
    $questions = [];
    $answers = [];
    for ($round = 0; $round < $countQuestion; $round++) {
        $num = random_int(0, 100);
        $questions[] = $num;
        $answers[] = $num % 2 === 0 ? 'yes' : 'no';
    }
    return [$questions, $answers];
}
