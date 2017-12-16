<?php

namespace Partyschaum\AdventOfCode\Day15;

class BitComparator implements Comparator
{
    public function compare(int $a, int $b): bool
    {
        return ($a & 65535) === ($b & 65535);
    }
}
