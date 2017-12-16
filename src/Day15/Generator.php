<?php

namespace Partyschaum\AdventOfCode\Day15;

class Generator
{
    /** @var int */
    private $seed;

    /** @var int */
    private $factor;

    /** @var int */
    private $next;

    /** @var int */
    private $divisor;

    public function __construct(int $seed, int $factor, int $divisor)
    {
        $this->seed = $seed;
        $this->factor = $factor;
        $this->next = 0;
        $this->divisor = $divisor;
    }

    public function generate(): int
    {
        if ($this->next === 0) {
            $this->next = $this->seed;
        }
        $this->next = $this->next * $this->factor % $this->divisor;
        return $this->next;
    }
}
