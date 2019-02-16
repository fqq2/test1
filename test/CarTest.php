<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class CarTest extends TestCase
{
    public function testCanCreateVolvo(): void
    {
        $car = new Volvo();

        $this->assertInstanceOf(Volvo::class, $car);
    }

    public function testCanCreateFord(): void
    {
        $car = new Ford();

        $this->assertInstanceOf(Ford::class, $car);
    }

    public function testCarHasWheels(): void
    {
        $this->assertclassHasAttribute('wheels', Car::class);

    }

    public function testCarAccelerate(): void
    {
        $this->assertTrue(
            method_exists(car::class, 'accelerate')
        );
    }

    public function testCarDecelerate(): void
    {
        $this->assertTrue(
            method_exists(car::class, 'decelerate')
        );
    }

    public function testVolvoAccelerate(): void
    {
        $volvo = new Volvo();

        $this->assertEquals(1, $volvo->accelerate());

    }

    public function testVolvoDecelerate(): void
    {
        $volvo = new Volvo();

        $this->assertEquals(-1, $volvo->decelerate());

    }

    public function testFordAccelerate(): void
    {
        $ford = new Volvo();

        $this->assertEquals(1, $ford->accelerate());

    }

    public function testFordDecelerate(): void
    {
        $ford = new Volvo();

        $this->assertEquals(-1, $ford->decelerate());

    }
    public function testAcceleration(): void
    {
        $this->assertEquals(2, Physics::acceleration(1, 2));

    }

}