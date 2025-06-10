<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanFly as InterfacesCanFly;
use App\Interfaces\CanWalk as InterfacesCanWalk;


class Dove extends Animal implements InterfacesCanFly, InterfacesCanWalk
{
    protected function getNoise(): string
    {
        return 'Rou Rouuu';
    }
}
