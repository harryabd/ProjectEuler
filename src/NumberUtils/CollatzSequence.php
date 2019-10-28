<?php

namespace NumberProblems\NumberUtils;

/**
 * Divisors
 * 
 * Contains methods related to the Collatz sequence
 */
class CollatzSequence
{
    /**
     * getNextTerm
     * 
     * If $number is even next term = $number / 2
     * If $number is odd next term = 3 * $number + 1
     * Sequence ends at 1
     *
     * @param int $number
     * @return int
     */
    public static function getNextTerm($number) {
        if ($number == 1) {
            return 1;
        }
        if ($number % 2 == 0) {
            return $number / 2;
        } else {
            return $number * 3 + 1;
        }
    }
}