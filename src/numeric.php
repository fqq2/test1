<?php
declare(strict_types=1);

final class numeric
{
    private $num;

    private function __construct(string $num)
    {
        $this->ensureIsNumber($num);
        $this->num = $num;
    }

    public static function fromString(string $num): self
    {
        return new self($num);
    }

    public function __toString(): string
    {
        return $this->num;
    }

    private function ensureIsNumber(string $num): void
    {
        if (!filter_var($num, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid email address',
                    $num
                )
            );
        }
    }
}