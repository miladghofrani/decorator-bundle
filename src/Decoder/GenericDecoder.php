<?php

declare(strict_types=1);

namespace miladghofrani\DecoratorBundle\Decoder;

use miladghofrani\DecoratorBundle\Decoder\Contract\DecoderFactoryInterface;

class GenericDecoder
{
    private DecoderFactoryInterface $decoderFactory;

    public function __construct(DecoderFactoryInterface $decoderFactory)
    {
        $this->decoderFactory = $decoderFactory;
    }

    public function decode($data, string $format): array
    {
        $decoder = $this->decoderFactory->createDecoder($format);

        return $decoder->decode($data);
    }
}