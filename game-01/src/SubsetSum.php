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
        for ($i = 0; $i < count($this->set); $i++) {
            $addend = $this->sumTarget - $this->set[$i];

            // Find the addend in the set.
            if (in_array($addend, $this->set)) {
                return [$this->set[$i], $addend];
            }
        }

        return [];
    }

}