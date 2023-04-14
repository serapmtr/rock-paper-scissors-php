<?php

namespace Functions\Display;

use User;
use function Functions\Random\randomChoice;
use function Functions\Options\removeOption;

require_once("random.php");
require_once("options.php");

function printResult(string $userChoice, array $computerChoices, User $user)
{
    switch ($userChoice) {
        case "!rating":
            echo "Your rating: " . $user->getScore() . "\n";
            break;
        case "!exit":
            break;
        default:
            $beats = [];
            $beatens = [];

            $beatOk = false;
            $beatenOk = false;

            $removed = removeOption($computerChoices, $userChoice);


            for ($i = 0; $i < count($removed) / 2; $i++) {
                array_push($beats, $removed[$i]);
            }

            for ($i = count($removed) / 2; $i < count($removed); $i++) {
                array_push($beatens, $removed[$i]);
            }
            $computerChoice = randomChoice($computerChoices);

            foreach ($beats as $beat) {
                if ($beat == $computerChoice) {
                    $beatOk = true;
                }
            }

            foreach ($beatens as $beaten) {
                if ($beaten == $computerChoice) {
                    $beatenOk = true;
                }
            }


            if ($beatenOk) {
                echo "Sorry, but the computer chose $computerChoice \n";
            } else if ($beatOk) {
                echo "Well done. The computer chose $computerChoice and failed. \n";
                $user->addScore(100);
            } else if ($computerChoice == $userChoice) {
                echo "There is a draw ($computerChoice) \n";
                $user->addScore(50);
            }
    }


}