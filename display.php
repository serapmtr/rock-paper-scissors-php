<?php

namespace Display;

use function Random\randomChoice;

require_once("random.php");
function printResult(string  $userChoice)
{
    $computerChoices = ["rock", "paper", "scissors"];

    $computerChoice = randomChoice($computerChoices);
    if($userChoice == "paper") {
        if($computerChoice == "scissors") {
            echo "Sorry, but the computer chose $computerChoice";
        } else if($computerChoice == "rock") {
            echo "Well done. The computer chose $computerChoice and failed";
        } else {
            echo "There is a draw ($computerChoice)";
        }
    } 
    
    if($userChoice == "scissors") {
        if($computerChoice == "rock") {
            echo "Sorry, but the computer chose $computerChoice";
        } else if($computerChoice == "paper") {
            echo "Well done. The computer chose $computerChoice and failed";
        } else {
            echo "There is a draw ($computerChoice)";
        }
    }   

    if($userChoice == "rock") {
        if($computerChoice == "paper") {
            echo "Sorry, but the computer chose $computerChoice";
        } else if($computerChoice == "scissors") {
            echo "Well done. The computer chose $computerChoice and failed";
        } else {
            echo "There is a draw ($computerChoice)";
        }
    }   

}
