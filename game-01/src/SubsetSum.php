<?php

namespace Jigsaw\FirstGame;

class SubsetSum
{
    private $set;
    private $sumTarget;

    /**
     * SubsetSum constructor.
     * @param array $set
     * @param int $sumTarget
     */
    public function __construct(array $set, int $sumTarget)
    {
        $this->set = $set;
        $this->sumTarget = $sumTarget;
    }

    /**
     * Find the first subset that sums a target.
     * @return array
     */
    public function getFirstSubset(): array
    {
        $setInverted = array_flip($this->set);
        foreach ($setInverted as $key => $value) {
            $addend = $this->sumTarget - $key;

            // If the addend exists then return the subset.
            if (isset($setInverted[$addend])) {
                return [$key, $addend];
            }
        }

        return [];
    }

}