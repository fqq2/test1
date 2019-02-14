<?php
declare(strict_types=1);

final class Numeric
{
    private $numeric;

    private function __construct(string $numeric)
    {
        $this->ensureIsNumber($numeric);
        $this->numeric = $numeric;
    }

    public static function fromString(string $numeric): self
    {
        return new self($numeric);
    }

    public function __toString(): string
    {
        return $this->numeric;
    }

    private function ensureIsNumber(string $numeric): void
    {
        if (!filter_var($numeric, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid email address',
                    $numeric
                )
            );
        }
    }
}