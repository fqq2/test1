<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class NumericTest extends TestCase
{
    public function testFailure():void
    {
        $this->assertIsNumeric(
            Numeric::fromString("ki")
        );
    }
}