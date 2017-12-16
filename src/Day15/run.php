<?php

namespace Partyschaum\AdventOfCode\Day15;

require __DIR__ . '/../../vendor/autoload.php';

$generatorA = new Generator(783, 16807, 2147483647);
$generatorB = new Generator(325, 48271, 2147483647);

$judge = new Judge(new BitComparator());

for ($i = 0; $i < 40000000; $i++) {
    $judge->compare($generatorA->generate(), $generatorB->generate());
}

printf("Found %d matches!\n", $judge->matches());
