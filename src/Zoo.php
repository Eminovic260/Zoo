<?php

namespace App;

use App\Interfaces\CanSwim;
use App\Interfaces\CanFly;
use App\Interfaces\CanWalk;

class Zoo
{
    private static ?Enclosure $aquarium = null;
    private static ?Enclosure $aviary = null;
    private static ?Enclosure $fence = null;

    public static function getAquarium(): Enclosure
    {
        return self::$aquarium ??= new Enclosure();
    }

    public static function getAviary(): Enclosure
    {
        return self::$aviary ??= new Enclosure();
    }

    public static function getFence(): Enclosure
    {
        return self::$fence ??= new Enclosure();
    }

    public static function addAnimal(Animal $animal): void
    {
        $isIn = false;

        if ($animal instanceof CanFly) {
            self::getAviary()->addAnimal($animal);
            $isIn = true;
        }

        if ($animal instanceof CanSwim && !$isIn && !($animal instanceof \App\Animals\Zebra)) {
            self::getAquarium()->addAnimal($animal);
            $isIn = true;
        }

        if ($animal instanceof CanWalk && !$isIn) {
            self::getFence()->addAnimal($animal);
        }
    }


    public static function visitTheZoo(): void
    {
        echo "Aquarium:\n" . self::getAquarium();
        echo "Aviary:\n" . self::getAviary();
        echo "Fence:\n" . self::getFence();
    }
}

