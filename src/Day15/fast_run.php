<?php

$judge = 0;
$ga = 65;
$gb = 8921;

for ($i = 0; $i < 40000000; $i++) {
    $ga = $ga * 16807 % 2147483647;
    $gb = $gb * 48271 % 2147483647;
    if (($ga & 65535) === ($gb & 65535)) {
        $judge++;
    }
}

echo $judge . PHP_EOL;
