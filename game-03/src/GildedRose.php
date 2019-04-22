<?php

namespace App;

use App\Categories\AgedBrieCategory;
use App\Categories\BackStageCategory;
use App\Categories\Category;
use App\Categories\ConjuredCategory;
use App\Categories\NormalCategory;
use App\Exceptions\FactoryClassNotFoundException;
use App\Interfaces\GildedRoseInterface;

class GildedRose implements GildedRoseInterface
{
    private static $lookup = [
        'normal' => NormalCategory::class,
        'Aged Brie' => AgedBrieCategory::class,
        'Backstage passes to a TAFKAL80ETC concert' => BackStageCategory::class,
        'Conjured Mana Cake' => ConjuredCategory::class,
        // Sulfura doesn't change its attributes, so it works as a parent class with no tick's implementation.
        'Sulfuras, Hand of Ragnaros' => Category::class,
    ];

    /**
     * Initiates the class considering the category's name and attributes such as quality and sell in.
     * @param string $name
     * @param int $quality
     * @param int $sellIn
     * @return Category
     * @throws FactoryClassNotFoundException
     */
    public static function of(string $name, int $quality, int $sellIn): Category
    {
        if (!isset(self::$lookup[$name])) {
            throw new FactoryClassNotFoundException;
        }

        return new self::$lookup[$name]($quality, $sellIn);
    }
}
