<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function getName(): string
{
    line("Welcome to the Brain Games!");
    $playerName = prompt("May I have your name?");
    line("Hello, $playerName!");
    return $playerName;
}

function setCondition(string $condition): void
{
    line($condition);
}

function askQuestion(string $question): void
{
    line("Question: $question");
}


function game(string $playerName, string $condition, array $questionAndAnswers): void
{
    $round = 0;
    setCondition($condition);
    [$questions, $answers] = $questionAndAnswers;
    while ($round < 3) {
        askQuestion($questions[$round]);
        $playerAnswer = prompt("Your answer");
        $correctAnswer = $answers[$round];
        if ($playerAnswer === $correctAnswer) {
            line("Correct!");
            $round++;
        } else {
            line("'$playerAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
            line("Let's try again, $playerName!");
            break;
        }
    }
    if ($round >= 3) {
        line("Congratulations, $playerName!");
    }
}
