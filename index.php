<?php

$userChoice = readline("> ");

if($userChoice == "paper") {
    $computerChoice = "scissors";
}

if($userChoice == "scissors") {
    $computerChoice = "rock";
}

if($userChoice == "rock") {
    $computerChoice = "paper";
}

echo "Sorry, but the computer chose $computerChoice";