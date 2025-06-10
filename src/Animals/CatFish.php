<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanSwim as InterfacesCanSwim;



class CatFish extends Animal implements InterfacesCanSwim
{
    protected function getNoise(): string
    {
        return 'bloublouMiaou';
    }
}
