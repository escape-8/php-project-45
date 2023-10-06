<?php

namespace BrianGames\Cli;

use function cli\line;
use function cli\prompt;

function greetings()
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, " . $name . "!");
}
