<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product
{
    private int $min_age = 0;

    public function setMinAge(int $_min_age): void
    {
        $this->min_age = $_min_age;
    }

    public function getMinAge(): int
    {
        return $this->min_age;
    }
}
