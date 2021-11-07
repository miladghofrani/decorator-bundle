<?php

declare(strict_types=1);

namespace MiladGhofrani\DecoratorBundle\Decoder\Handlers;

use MiladGhofrani\DecoratorBundle\Decoder\Contract\DecoderInterface;
use Symfony\Component\Serializer\Encoder\XmlEncoder;

class XmlDecoder implements DecoderInterface
{
    public function decode($data): array
    {
        $xmlDecoder = new XmlEncoder();

        return $xmlDecoder->decode($data, 'xml');
    }
}