<?php
use function Display\printResult;

require_once("functions/display.php");
do {
    $userChoice = readline("\n> ");

    if($userChoice != "paper" && $userChoice != "rock" && $userChoice != "scissors" && $userChoice != "!exit") {
        echo "Invalid input";
    }

    printResult($userChoice);
} while ($userChoice != "!exit");

echo "Bye!\n";

