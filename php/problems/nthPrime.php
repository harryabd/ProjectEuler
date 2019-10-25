<?php

$whichPrime = $argv[1];
$primesFound = 1;

for ($i = 3; $primesFound < $whichPrime; $i++) {
    for ($j = 2; $j < sqrt($i) + 1; $j++) {
        if (is_integer($i / $j)) {
            continue 2;
        }
    }
    $primesFound++;
    if ($primesFound == $whichPrime) {
        echo "The $whichPrime'th prime number is $i\n";
    }
}
