<?php

namespace NumberProblems\Test;

use NumberProblems\NumberUtils\TriangularNumbers;
use PHPUnit\Framework\TestCase;

class TriangularNumbersTest extends TestCase
{
    public function testIsTriangularNumber() {
        $this->assertEquals(true, TriangularNumbers::isTriangularNumber(1));
        $this->assertEquals(true, TriangularNumbers::isTriangularNumber(10));
        $this->assertEquals(true, TriangularNumbers::isTriangularNumber(28));
        $this->assertEquals(false, TriangularNumbers::isTriangularNumber(8));
        $this->assertEquals(false, TriangularNumbers::isTriangularNumber(27));
    }

    public function testGetNthTriangularNumber() {
        $this->assertEquals(1, TriangularNumbers::getNthTriangularNumber(1));
        $this->assertEquals(3, TriangularNumbers::getNthTriangularNumber(2));
        $this->assertEquals(6, TriangularNumbers::getNthTriangularNumber(3));
        $this->assertEquals(15, TriangularNumbers::getNthTriangularNumber(5));
        $this->assertEquals(55, TriangularNumbers::getNthTriangularNumber(10));
    }
}
