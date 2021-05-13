<?php


namespace Models;


class Product
{
    private string $name;
    private string $price;

    public function __construct(string $name = '', string $price = "")
    {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @param mixed|string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed|string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param int|mixed $price
     */
    public function setPrice(string $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int|mixed
     */
    public function getPrice(): string
    {
        return $this->price;
    }
}