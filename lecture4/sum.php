<?php

function sum(&$a, &$b) {
    $a++;
    $b++;

    echo "<h2>\$a = " . $a . "</h2>";
    echo "<h2>\$b = " . $b . "</h2>";
    echo "<hr>";

    return $a + $b;
}

$x = 4; $y = 7;

$tong = sum($x, $y);

echo "<h2>\$tong = " . $tong . "</h2>";
echo "<h2>\$x = " . $x . "</h2>";
echo "<h2>\$y = " . $y . "</h2>";
