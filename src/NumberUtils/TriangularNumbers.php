<?php

namespace NumberProblems\NumberUtils;

/**
 * TriangularNumbers
 * 
 * contains methods related to triangular numbers
 */
class TriangularNumbers
{
    public static function isTriangularNumber($number) {
        for ($i = 0; $number > 0; $i++) {
            $number -= $i;
        }
        if ($number == 0) {
            return true;
        }
        return false;
    }

    public static function getNthTriangularNumber($n) {
        for ($i = $number = 0; $i <= $n; $i++) {
            $number += $i;
        }
        return $number;
    }
}
