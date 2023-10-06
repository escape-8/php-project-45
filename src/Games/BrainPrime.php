<?php

namespace BrainGames\Prime;

function setCondition(): string
{
    return 'Answer "yes" if given number is prime. Otherwise answer "no".';
}

function generateQuestionsAndAnswers(int $countQuestion): array
{
    $questions = [];
    $answers = [];
    for ($round = 0; $round < $countQuestion; $round++) {
        $num = random_int(2, 100);
        $questions[] = $num;
        $answers[] = isPrime($num) === true ? 'yes' : 'no';
    }
    return [$questions, $answers];
}

function isPrime(int $num): bool
{
    if ($num === 2) {
        return true;
    }
    $delimiter = ceil(sqrt($num));
    while ($delimiter > 1) {
        if ($num % $delimiter === 0) {
            return false;
        }
        $delimiter--;
    }
    return true;
}
