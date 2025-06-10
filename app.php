<?php
require __DIR__ . '/vendor/autoload.php';

use App\Animals\Fish;
use App\Animals\BubbleFish;
use App\Animals\CatFish;
use App\Animals\ClownFish;
use App\Animals\Elephant;
use App\Animals\Zebra;
use App\Animals\Parrot;
use App\Animals\Dove;
use App\Zoo;

$animals = [];

$animalsToCreate = [
    Fish::class => 5,
    BubbleFish::class => 3,
    CatFish::class => 2,
    ClownFish::class => 1,
    Elephant::class => 2,
    Zebra::class => 1,
    Parrot::class => 10,
    Dove::class => 2,
];


foreach ($animalsToCreate as $animalClass => $count) {
    for ($i = 1; $i <= $count; $i++) {
        $animals[] = new $animalClass($animalClass . " " . $i);
    }
}




foreach ($animals as $animal) {
    Zoo::addAnimal($animal);
}


Zoo::visitTheZoo();
