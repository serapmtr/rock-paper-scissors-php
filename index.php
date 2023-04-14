<?php
use function Functions\Display\printResult;
use function Functions\Files\readFiles;
use function Functions\Parse\parse;

require_once("functions/display.php");
require_once("functions/readFile.php");
require_once("functions/parse.php");
require_once("models/User.php");

$userName = readline("Enter your name: > ");

echo "Hello, $userName \n";

$lines = readFiles();

$elements = parse($lines);
$user = new User($userName);

foreach ($elements as $index => $element) {
    if (str_contains($userName, $element)) {
        $user->setScore($elements[$index + 1]);
        break;
    } else {
        $user->setScore(0);
    }
}

do {

    $userChoice = readline("\n> ");

    if (
        $userChoice != "paper" &&
        $userChoice != "rock" &&
        $userChoice != "scissors" &&
        $userChoice != "!exit" &&
        $userChoice != "!rating"
    ) {
        echo "Invalid input";
    }

    printResult($userChoice, $user);
} while ($userChoice != "!exit");

echo "Bye!\n";