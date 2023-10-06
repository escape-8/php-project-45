<?php

namespace BrainGames\Progression;

function setCondition(): string
{
    return 'What number is missing in the progression?';
}

function generateQuestionsAndAnswers(int $countQuestion): array
{
    $questions = [];
    $answers = [];
    for ($round = 0; $round < $countQuestion; $round++) {
        $question = createProgression(10);
        $changeIndex = array_rand($question, 1);
        $answers[] = (string)$question[$changeIndex];
        $question[$changeIndex] = '..';
        $questions[] = implode(' ', $question);
    }
    return [$questions, $answers];
}

function createProgression($length): array
{
    $startProgression = random_int(0, 50);
    $stepProgression = random_int(1, 10);
    $progression = [];

    while ($length !== 0) {
        $progression[] = $startProgression + $stepProgression;
        $startProgression += $stepProgression;
        $length--;
    }
    return $progression;
}
