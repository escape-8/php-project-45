<?php

namespace BrianGames\Calc;

function setCondition(): string
{
    return 'What is the result of the expression?';
}

function generateQuestionsAndAnswers(int $countQuestion): array
{
    $questions = [];
    $answers = [];
    $operators = ['+', '-', '*'];
    for ($question = 0; $question < $countQuestion; $question++) {
        $num1 = random_int(0, 100);
        $num2 = random_int(0, 100);
        $questions[] = "$num1 $operators[$question] $num2";
        $answer = 0;
        switch ($operators[$question]) {
            case '+':
                $answer = $num1 + $num2;
                break;
            case '-':
                $answer = $num1 - $num2;
                break;
            case '*':
                $answer = $num1 * $num2;
                break;
        }
        $answers[] = (string)$answer;
    }
    return [$questions, $answers];
}
