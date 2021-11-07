<?php

namespace miladghofrani\DecoratorBundle\Contract;

interface TransformerInterface
{
    public function transform(array $data): array;
}