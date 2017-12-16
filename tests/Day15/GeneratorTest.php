<?php

namespace Partyschaum\AdventOfCode\Tests\Day15;

use Partyschaum\AdventOfCode\Day15\Generator;
use PHPUnit\Framework\TestCase;

class GeneratorTest extends TestCase
{
    /**
     * @test
     */
    public function generatesSequence()
    {
        $generator = new Generator(65, 16807, 2147483647);

        $expectedSequence = [ 1092455, 1181022009, 245556042, 1744312007, 1352636452];

        foreach ($expectedSequence as $item) {
            $this->assertEquals($item, $generator->generate());
        }
    }
}
