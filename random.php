<?php

namespace Random;


function randomChoice(array $computerChoices)
{
    $random = random_int(0, count($computerChoices)-1);

    foreach($computerChoices as $index =>$choice) {
        if($random == $index) {
            return $choice;
        }
    }
}
