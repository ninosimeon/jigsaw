<?php

namespace App;

use App\Categories\AgedBrieCategory;
use App\Categories\BackStageCategory;
use App\Categories\Category;
use App\Categories\ConjuredCategory;
use App\Categories\NormalCategory;
use App\Interfaces\GildedRoseInterface;

class GildedRose implements GildedRoseInterface
{
    private static $lookup = [
        'normal' => NormalCategory::class,
        'Aged Brie' => AgedBrieCategory::class,
        'Backstage passes to a TAFKAL80ETC concert' => BackStageCategory::class,
        'Conjured Mana Cake' => ConjuredCategory::class,
    ];

    /**
     * Initiates the class considering the category's name and attributes such as quality and sell in.
     * @param string $name
     * @param int $quality
     * @param int $sellIn
     * @return mixed
     */
    public static function of(string $name, int $quality, int $sellIn)
    {
        // Sulfuras doesn't change any of its attributes so it's worked as an default class (Category).
        $class = isset(self::$lookup[$name]) ? self::$lookup[$name] : Category::class;

        return new $class($quality, $sellIn);
    }
}
