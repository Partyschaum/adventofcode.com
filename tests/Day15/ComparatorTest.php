<?php
/**
 * Created by IntelliJ IDEA.
 * User: hauke
 * Date: 16/12/17
 * Time: 14:44
 */

namespace Partyschaum\AdventOfCode\Tests\Day15;

use Partyschaum\AdventOfCode\Day15\BitComparator;
use Partyschaum\AdventOfCode\Day15\StringComparator;
use PHPUnit\Framework\TestCase;

class ComparatorTest extends TestCase
{
    /**
     * @test
     */
    public function returnsTrueForMatchingLowest16Bit()
    {
        $comparator = new StringComparator();
        $this->assertTrue($comparator->compare(245556042, 1431495498));

        $comparator = new BitComparator();
        $this->assertTrue($comparator->compare(245556042, 1431495498));
    }

    /**
     * @test
     */
    public function returnsFalseForNotMatchingLowest16Bit()
    {
        $comparator = new StringComparator();
        $this->assertFalse($comparator->compare(245556042, 1431495499));

        $comparator = new BitComparator();
        $this->assertFalse($comparator->compare(245556042, 1431495499));
    }

}
