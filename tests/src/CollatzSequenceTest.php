<?php

namespace NumberProblems\Test;

use NumberProblems\NumberUtils\CollatzSequence;
use PHPUnit\Framework\TestCase;

class CollatzSequenceTest extends TestCase
{
    public function testGetNextTerm() {
        $this->assertEquals(1, CollatzSequence::getNextTerm(1));
        $this->assertEquals(1, CollatzSequence::getNextTerm(2));
        $this->assertEquals(10, CollatzSequence::getNextTerm(3));
        $this->assertEquals(2, CollatzSequence::getNextTerm(4));
        $this->assertEquals(40, CollatzSequence::getNextTerm(13));
    }
}
