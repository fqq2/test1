<?php
use PHPUnit\Framework\TestCase;

class NumericTest extends TestCase
{
    public function testFailure()
    {
        $this->assertIsNumeric(numeric::fromString(2));
    }
}