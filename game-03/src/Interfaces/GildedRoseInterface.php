<?php

namespace App\Interfaces;

use App\Categories\Category;

interface GildedRoseInterface
{
    public static function of(string $name, int $quality, int $sellIn): Category;
}