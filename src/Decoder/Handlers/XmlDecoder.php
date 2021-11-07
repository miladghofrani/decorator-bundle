<?php

declare(strict_types=1);

namespace miladghofrani\DecoratorBundle\Decoder\Handlers;

use miladghofrani\DecoratorBundle\Decoder\Contract\DecoderInterface;
use Symfony\Component\Serializer\Encoder\XmlEncoder;

class XmlDecoder implements DecoderInterface
{
    public function decode($data): array
    {
        $xmlDecoder = new XmlEncoder();

        return $xmlDecoder->decode($data, 'xml');
    }
}