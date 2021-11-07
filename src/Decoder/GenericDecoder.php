<?php

declare(strict_types=1);

namespace MiladGhofrani\DecoratorBundle\Decoder;

use MiladGhofrani\DecoratorBundle\Decoder\Contract\DecoderFactoryInterface;

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