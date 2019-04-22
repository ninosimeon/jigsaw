<?php

namespace App\Interfaces;

interface ItemInterface
{
    /**
     * ItemInterface constructor.
     * @param int $quality
     * @param int $sellIn
     */
    public function __construct(int $quality, int $sellIn);

    /**
     * @return mixed
     */
    public function tick();
}