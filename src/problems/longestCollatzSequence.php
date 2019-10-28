<?php

require_once(__DIR__ . '/../../vendor/autoload.php');

use NumberProblems\NumberUtils\CollatzSequence;

$maxStartingNumber = $argv[1];

$longestSequence = 0;
for ($i = $maxStartingNumber / 2 - 1; $i < $maxStartingNumber; $i++) {
    $term = $i;
    $lengthOfSequence = 0;
    while ($term != 1) {
        $term = CollatzSequence::getNextTerm($term);
        $lengthOfSequence++;
    }
    if ($lengthOfSequence > $longestSequence) {
        $longestSequence = $lengthOfSequence;
        $longestSequenceFirstTerm = $i;
    }
}

echo "The longest Collatz Sequence starting from a number < $maxStartingNumber is $longestSequence terms long starting with $longestSequenceFirstTerm";