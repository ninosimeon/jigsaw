<?php

namespace App\Interfaces;

interface GildedRoseInterface
{
    public static function of(string $name, int $quality, int $sellIn);
}