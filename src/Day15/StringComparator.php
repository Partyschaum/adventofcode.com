<?php

namespace Partyschaum\AdventOfCode\Day15;

class StringComparator implements Comparator
{
    const LOWEST_16_BIT = -16;

    public function compare(int $a, int $b): bool
    {
        return substr(decbin($a), self::LOWEST_16_BIT) === substr(decbin($b), self::LOWEST_16_BIT);
    }
}
