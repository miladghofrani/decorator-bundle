<?php

declare(strict_types=1);

namespace MiladGhofrani\DecoratorBundle\Transformer;

class TransformedResponseResource
{
    private array $attributes;

    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
    }

    public function get(string $key)
    {
        if (! \array_key_exists($key, $this->attributes)) {
            throw new \InvalidArgumentException();
        }

        return $this->attributes[$key];
    }

    public function toArray(): array
    {
        return $this->attributes;
    }
}