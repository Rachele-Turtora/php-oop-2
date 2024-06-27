<?php

require_once __DIR__ . '/Product.php';

class Kennel extends Product
{
    private int $size = 0;

    public function setSize(int $_size): void
    {
        $this->size = $_size;
    }

    public function getSize(): int
    {
        return $this->size;
    }
}
