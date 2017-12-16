<?php

namespace Partyschaum\AdventOfCode\Day15;

interface Comparator
{
    public function compare(int $a, int $b): bool;
}
