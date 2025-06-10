<?php
namespace App\Animals;
use App\Animal;

class Duck extends Animal {
    protected function getNoise(): string {
        return 'coin coin';
    }
}
