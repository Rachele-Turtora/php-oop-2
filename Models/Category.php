<?php

class Category
{
    private string $name;
    protected string $icon;

    public function __construct(string $_name, string $_icon)
    {
        $this->name = $_name;
        $this->icon = $_icon;
    }

    public function setName(string $_name): void
    {
        $this->name = $_name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setIcon(string $_icon): void
    {
        $this->icon = $_icon;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }
}
