<?php

$seriesToCompare = (string) $argv[1];
$numberOfAdjacentDigits = $argv[2];

$lengthOfSeries = strlen($seriesToCompare);

$maxIndex = $lengthOfSeries - $numberOfAdjacentDigits;

$maxProduct = 0;
$currentProduct = 1;

for ($i = 0; $i < $maxIndex; $i++) {
    $currentProduct = 1;
    for ($j = 0; $j < $numberOfAdjacentDigits; $j++) {
        $currentProduct *= substr($seriesToCompare, $i + $j, 1);
    }
    if ($currentProduct > $maxProduct) {
        $maxProduct = $currentProduct;
    }
}
var_dump($maxProduct);
