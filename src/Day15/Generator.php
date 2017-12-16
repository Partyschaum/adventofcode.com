<?php

namespace Partyschaum\AdventOfCode\Day15;

class Generator
{
    /** @var int */
    private $factor;

    /** @var int */
    private $next;

    /** @var int */
    private $divisor;

    public function __construct(int $seed, int $factor, int $divisor)
    {
        $this->factor = $factor;
        $this->next = $seed;
        $this->divisor = $divisor;
    }

    public function generate(): int
    {
        $this->next = $this->next * $this->factor % $this->divisor;
        return $this->next;
    }
}
