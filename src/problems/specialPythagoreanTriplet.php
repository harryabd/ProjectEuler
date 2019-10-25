<?php

$sum = $argv[1];

$foundTriplet = false;

for ($a = 1; !$foundTriplet; $a++) {
    $totalExceedsSum = false;
    for ($b = $a + 1; !$totalExceedsSum; $b++) {
        $cSquared = pow($a, 2) + pow($b, 2);
        $c = sqrt($cSquared);
        $total = $a + $b + $c;
        if ($c == floor($c)) {
            $isPythagoreanTriple = true;
            echo "a = $a, b = $b, c = $c, total = $total\n\n";
            if ($total == $sum) {
                $foundTriplet = true;
                $product = $a * $b * $c;
                echo "Product of a = $a, b = $b, c = $c is $product\n\n";
            } 
        }
        if ($total > $sum) {
            $totalExceedsSum = true;
        }
    }
}