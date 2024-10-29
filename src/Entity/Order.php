<?php

namespace App\Entity;

class Order
{
    public function __construct(
        private readonly int $id,
        private int $pizzaId,
        private float $pizzaPrice,
        private int $pizzaSize,
        private int $sauceId,
        private float $sum,
        private \DateTimeImmutable $createdAt,
    ) {
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPizzaId(): int
    {
        return $this->pizzaId;
    }

    public function setPizzaId(int $pizzaId): self
    {
        $this->pizzaId = $pizzaId;

        return $this;
    }

    public function setPizzaSize(int $pizzaSize): self
    {
        $this->pizzaSize = $pizzaSize;

        return $this;
    }

    public function getSauceId(): int
    {
        return $this->sauceId;
    }

    public function setSauceId(int $sauceId): self
    {
        $this->sauceId = $sauceId;

        return $this;
    }

    public function getSum(): float
    {
        return $this->sum;
    }

    public function setSum(float $sum): self
    {
        $this->sum = $sum;

        return $this;
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function getPizzaName(): string
    {
        return $this->pizzaId->getName();
    }



    public function getPizzaPrice(): float
    {
        return $this->pizzaPrice;
    }

    public function setPizzaPrice(float $pizzaPrice): self
    {
        $this->pizzaPrice = $pizzaPrice;

        return $this;
    }

    public function getPizzaSize(): int
    {
        return $this->pizzaSize;
    }
}