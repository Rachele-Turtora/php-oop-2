<?php

require_once __DIR__ . '/Animal.php';
class Product extends Animal
{
    private string $title;
    private int $price;
    private string $type;

    public function __construct(string $_title, string $_type)
    {
        $this->title = $_title;
        $this->type = $_type;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setPrice(int $_price): void
    {
        if (!is_int($_price)) {
            throw new TypeError("Il prezzo deve essere un intero");
        }
        $this->price = $_price;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}
