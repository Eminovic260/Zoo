<?php

namespace App\Animals;


use App\Animal;
use App\Interfaces\CanSwim as InterfacesCanSwim;

class Fish extends Animal implements InterfacesCanSwim
{
    protected function getNoise(): string
    {
        return 'bloubloublou';
    }
}
