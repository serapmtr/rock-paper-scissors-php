<?php

namespace Functions\Options;

function setOptions()
{
    $array = readline("> ");

    if ($array == "") {
        $options = ["rock", "paper", "scissors"];
        return $options;
    } else {
        $options = [];
        $arrayOptions = explode(",", $array);

        array_push($options, $arrayOptions);
        return $options[0];
    }

    
}

function removeOption(array $options, string $option): array
{
    foreach ($options as $index => $element) {
        if ($element == $option) {
            $indexed = $index;
        }
    }
    if (isset($indexed)) {
        unset($options[$indexed]);

        $options = array_values($options);

    }


    return $options;
}