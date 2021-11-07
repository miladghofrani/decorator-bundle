<?php

namespace MiladGhofrani\DecoratorBundle\Decoder\Contract;

interface DecoderFactoryInterface
{
    public function createDecoder(string $format): DecoderInterface;
}