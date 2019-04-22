<?php

namespace App\Interfaces;

interface CategoryInterface
{
    public function __construct(int $quality, int $sellIn);
}