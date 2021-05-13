<?php


class Rectangle
{
    public float $width;
    public float $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @param mixed $name
     */
    public function getArea(): float
    {
        return $this->width * $this->height;
    }

    /**
     * @return mixed
     */
    public function getPerimeter(): float
    {
        return ($this->width + $this->height) * 2;
    }

}