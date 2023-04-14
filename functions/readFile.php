<?php

namespace Functions\Files;

function readFiles()
{
    $index = 0;
    $lines = [];
    
    $file = fopen("rating.txt", "r") or die;
 
    while(!feof($file)) {
        $lines[$index] = fgets($file) . "\n";
        $index++;
    }
    fclose($file);

    return $lines;
}