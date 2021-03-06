<?php

namespace Partyschaum\AdventOfCode\Day15;

class Judge
{
    /** @var Comparator */
    private $comparator;

    /** @var int */
    private $matches;

    public function __construct(Comparator $comparator)
    {
        $this->comparator = $comparator;
        $this->matches = 0;
    }

    public function compare(int $a, int $b): void
    {
        if ($this->comparator->compare($a, $b)) {
            $this->matches++;
        }
    }

    public function matches(): int
    {
        return $this->matches;
    }
}
