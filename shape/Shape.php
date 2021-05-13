<?php


class Shape
{
    public $name;

    public function __construct()
    {
        $this->name = $name;
    }

    public function show()
    {
        return "I am a shape. My name is $this->name";
    }
}