<?php

namespace Partyschaum\AdventOfCode\Tests\Day15;

use Partyschaum\AdventOfCode\Day15\Comparator;
use Partyschaum\AdventOfCode\Day15\Judge;
use PHPUnit\Framework\TestCase;

class JudgeTest extends TestCase
{
    /**
     * @test
     */
    public function findsMatchesForPairs()
    {
        $sequence = [
            [1092455, 430625591],
            [1181022009, 1233683848],
            [245556042, 1431495498],
            [1744312007, 137874439],
            [1352636452, 285222916],
        ];

        $judge = new Judge(new Comparator());

        foreach ($sequence as $pair) {
            $judge->compare($pair[0], $pair[1]);
        }

        $this->assertEquals(1, $judge->matches());
    }
}
