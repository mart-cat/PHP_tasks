<?php

class Product
{
    private string $name;
    private int $price;
    private int $quantity;

    public function __construct(string $name, int $price, int $quantity)
    {

        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function isStuck(): bool
    {
        if ($this->quantity > 0) {
            return true;
        } else {
            return false;
        }
    }


}

class Sponser extends Product
{
    private string $description;
    public function __construct(string $name, int $price, int $quantity, string $description )
    {
        parent::__construct($name, $price, $quantity);
        $this->description = $description;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}


$products = [];
$products[] = new Product('Товар 1', 200, 10);
$products[] = new Product('Товар 2', 100, 10);
$products[] = new Sponser('Товар 3', 10000, 10, 'Ура деньги');
$products[] = new Product('Товар 4', 23230, -10);
$products[] = new Product('Товар 5', 100, -10);
$products[] = new Sponser('Товар 6', 10000, -10, 'Ура деньги');

