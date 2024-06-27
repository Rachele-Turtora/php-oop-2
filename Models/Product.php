<?php

require_once __DIR__ . '/Category.php';
class Product
{
    private string $title;
    private float $price = 0;
    private Category $category;

    public function __construct(string $_title, Category $_category)
    {
        $this->title = $_title;
        $this->setCategory($_category);
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setPrice(float $_price): void
    {
        if (!is_float($_price)) {
            throw new TypeError("Il prezzo deve essere un numero");
        }
        $this->price = $_price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setCategory(Category $_category): void
    {
        $this->category = $_category;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function getCurrentType()
    {
        return get_class($this);
    }
}
