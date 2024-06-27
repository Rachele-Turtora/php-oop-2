<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{
    private ?string $ingredients = null;
    private bool $is_vegan = false;
    private ?string $expiration_date = null;

    public function setIngredients(string $_ingredients): void
    {
        $this->ingredients = $_ingredients;
    }

    public function getIngredients(): string | null
    {
        return $this->ingredients;
    }

    public function setIsVegan(bool $_is_vegan): void
    {
        $this->is_vegan = $_is_vegan;
    }

    public function getIsVegan(): bool
    {
        return $this->is_vegan;
    }

    public function setExpirationDate(string $_expiration_date): void
    {
        $this->expiration_date = $_expiration_date;
    }

    public function getExpirationDate(): string
    {
        return $this->expiration_date;
    }
}
