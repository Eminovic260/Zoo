<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanFly as InterfacesCanFly;
use App\Interfaces\CanSwim as InterfacesCanSwim;
use App\Interfaces\CanWalk as InterfacesCanWalk;


class Duck extends Animal implements InterfacesCanSwim, InterfacesCanWalk, InterfacesCanFly
{
    protected function getNoise(): string
    {
        return 'coin coin';
    }
}
