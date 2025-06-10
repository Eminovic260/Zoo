<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanSwim as InterfacesCanSwim;

class BubbleFish extends Animal implements InterfacesCanSwim
{
    protected function getNoise(): string
    {
        return 'bloubloublou avec des bulles';
    }
}
