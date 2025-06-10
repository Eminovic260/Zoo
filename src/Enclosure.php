<?php

namespace App;

class Enclosure
{
    private array $animals = [];

    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    public function __toString(): string
{
    return implode("\n", array_map(fn($a) => $a->getName() . ' : ' . $a->noise(), $this->animals)) . "\n";
}

}
