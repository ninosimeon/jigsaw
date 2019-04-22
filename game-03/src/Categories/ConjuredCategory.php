<?php

namespace App\Categories;

use App\Interfaces\ItemInterface;

/**
 * Class ConjuredCategory
 * @package App\Categories
 */
class ConjuredCategory extends Category implements ItemInterface
{
    /**
     * @return mixed|void
     */
    public function tick()
    {
        $this->sellIn -= 1;
        $this->quality -= 2;

        if ($this->sellIn <= 0) {
            $this->quality -= 2;
        }

        if ($this->quality < 0) {
            $this->quality = 0;
        }
    }
}