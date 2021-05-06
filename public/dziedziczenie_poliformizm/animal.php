<?php


class animal
{

    protected $name;

    public function __construct($name)
    {
        $this->name = (string) $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function makeSound(): void
    {
        echo 'I am making sound!';
    }

}