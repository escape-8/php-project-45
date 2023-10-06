<?php

namespace BrainGames\BrainGcd;

function setCondition(): string
{
    return 'Find the greatest common divisor of given numbers.';
}

function generateQuestionsAndAnswers(int $countQuestion): array
{
    $questions = [];
    $answers = [];
    for ($round = 0; $round < $countQuestion; $round++) {
        $num1 = random_int(0, 100);
        $num2 = random_int(0, 100);
        $questions[] = "$num1 $num2";
        $answers[] = (string)findGcd($num1, $num2);
    }
    return [$questions, $answers];
}


function findGcd(int $a, int $b): int
{
    $max = max($a, $b);
    $min = min($a, $b);
    if ($min === 0 || $max === $min) {
        return $max;
    }
    if ($max === 0) {
        return $min;
    }
    while ($max % $min !== 0) {
        $newMin = $max % $min;
        $max = $min;
        $min = $newMin;
    }
    return $min;
}
