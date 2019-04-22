<?php

namespace App\Categories;

use App\Interfaces\ItemInterface;

/**
 * Class BackStageCategory
 * @package App\Categories
 */
class BackStageCategory extends Category implements ItemInterface
{
    /**
     * @return int|mixed|void
     */
    public function tick()
    {
        $this->sellIn -= 1;

        // If sellIn gets less than 0 so it finish its operation.
        if ($this->sellIn < 0) {
            return $this->quality = 0;
        }

        $this->quality += 1;

        if ($this->sellIn < 10) {
            $this->quality += 1;
        }

        if ($this->sellIn < 5) {
            $this->quality += 1;
        }

        if ($this->quality > 50) {
            $this->quality = 50;
        }
    }
}