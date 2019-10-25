<?php

$numberOfAdjacentNumbers = $argv[1];

$rows = file(__DIR__ . '/grid.txt');

foreach($rows as $row) {
    $grid[] = explode(' ', $row);
}

$limit[] = max(array_keys($grid[0]));
$limit[] = max(array_keys($grid));

$directions = ['horizontal' => [1, 0], 'vertical' => [0, 1], 'diagonal-left' => [-1, 1], 'diagonal-right' => [1, 1]];

$maxProduct = 0;
foreach ($directions as $direction => $coordinateAdjust) {
    for ($i = 0; $i < $limit[0]; $i++) {
        for ($j = 0; $j < $limit[1]; $j++) {
            $currentProduct = 1;
            for ($k = 0; $k < $numberOfAdjacentNumbers; $k++) {
                $horizontalIndex = $i + ($k * $coordinateAdjust[0]);
                $verticalIndex = $j + ($k * $coordinateAdjust[1]);
                if (isset($grid[$horizontalIndex][$verticalIndex])) {
                    $factor = (isset($grid[$horizontalIndex][$verticalIndex]) && is_numeric($grid[$horizontalIndex][$verticalIndex]))
                    ? $grid[$horizontalIndex][$verticalIndex]
                    : 0;
                    $currentProduct *= $factor;
                }
            }
            if ($currentProduct > $maxProduct) {
                $maxProduct = $currentProduct;
                echo "New max product: $maxProduct, direction $direction from [$i, $k]\n";
            }
        }
    }
}

echo "Max product is $maxProduct";