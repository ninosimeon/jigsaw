<?php

namespace App\Categories;

use App\Interfaces\ItemInterface;

/**
 * Class Category
 * @package App\Categories
 */
class Category implements ItemInterface
{
    public $quality;
    public $sellIn;

    /**
     * Here is an item initialized with a quality and sellIn attributes.
     * @param int $quality
     * @param int $sellIn
     */
    public function __construct(int $quality, int $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public function tick()
    {
    }
}