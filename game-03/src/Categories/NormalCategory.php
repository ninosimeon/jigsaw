<?php

namespace App\Categories;

use App\Interfaces\ItemInterface;

/**
 * Class NormalCategory
 * @package App\Categories
 */
class NormalCategory extends Category implements ItemInterface
{
    /**
     * @return mixed|void
     */
    public function tick()
    {
        $this->sellIn -= 1;
        $this->quality -= 1;

        if ($this->sellIn <= 0) {
            $this->quality -= 1;
        }

        if ($this->quality < 0) {
            $this->quality = 0;
        }
    }
}