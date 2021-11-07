<?php

namespace MiladGhofrani\DecoratorBundle\Contract;

interface TransformerInterface
{
    public function transform(array $data): array;
}