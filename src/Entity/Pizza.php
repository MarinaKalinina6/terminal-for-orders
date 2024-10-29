<?php

namespace App\Entity;

readonly class Pizzas
{
    public function __construct(
        private int $id,
        private string $name,
        private string $size21,
        private string $size26,
        private string $size31,
        private string $size45,

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

    public function getSize21(): string
    {
        return $this->size21;
    }

    public function getSize26(): string
    {
        return $this->size26;
    }

    public function getSize31(): string
    {
        return $this->size31;
    }

    public function getSize45(): string
    {
        return $this->size45;
    }
}
