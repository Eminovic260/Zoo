<?php

namespace App;

abstract class Animal
{

    private $name;

    function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }


    abstract protected function getNoise(): string;

    public function noise()
    {
        return $this->getNoise();
    }
}
