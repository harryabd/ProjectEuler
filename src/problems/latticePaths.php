<?php

$gridSize = $argv[1];

$permutations = 1;
for ($i = 0; $i < $gridSize; $i++) {
    $permutations *= (2 * $gridSize) - $i;
    $permutations /= ($i + 1);
}

echo "The number of paths through a $gridSize x $gridSize grid is $permutations";

$numbr = pow(2, 1000);

echo ("\n\n".$numbr);