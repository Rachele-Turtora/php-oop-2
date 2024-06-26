<?php

class Animal
{
    protected string $icon;

    public function setIcon(string $_icon): void
    {
        if ($_icon !== "dog" && $_icon !== "cat") {
            throw new Exception("Le categorie sono 'cat' o 'dog'");
        }
        $this->icon = $_icon;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }
}
