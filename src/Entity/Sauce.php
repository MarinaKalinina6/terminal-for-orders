<?php

namespace App\Entity;

readonly class Sauces
{
    public function __construct(
        private int $id,
        private string $name,
        private int $price,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

}