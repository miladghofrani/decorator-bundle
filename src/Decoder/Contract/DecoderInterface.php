<?php

namespace miladghofrani\DecoratorBundle\Decoder\Contract;

interface DecoderInterface
{
    public function decode($data): array;
}