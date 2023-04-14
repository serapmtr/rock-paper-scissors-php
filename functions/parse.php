<?php

namespace Functions\Parse;

function parse(array $lines)
{
    $elements = [];
    foreach($lines as $index => $element) {
        $splitted = explode(" ", $element);

        array_push($elements, ...$splitted);
    }

    return $elements;
}