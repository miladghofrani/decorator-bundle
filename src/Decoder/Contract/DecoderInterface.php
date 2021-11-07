<?php

namespace MiladGhofrani\DecoratorBundle\Decoder\Contract;

interface DecoderInterface
{
    public function decode($data): array;
}