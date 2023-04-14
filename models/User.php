<?php
use function Functions\Files\readFiles;

class User
{
    private string $name;
    private int $score;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setScore($score)
    {
        $this->score = $score;
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public function addScore(int $additional): int
    {
        $this->score  =  $this->score + $additional;
        return $this->score;
    }
}