<?php

declare(strict_types=1);

namespace MiladGhofrani\DecoratorBundle\Decoder\Factory;

use App\Service\Decoder\Contract\DecoderInterface;
use App\Service\Decoder\Contract\DecoderFactoryInterface;
use App\Service\Decoder\Handlers\JsonDecoder;
use App\Service\Decoder\Handlers\XmlDecoder;
use MiladGhofrani\DecoratorBundle\Transformer\Format;

class DecoderFactory implements DecoderFactoryInterface
{
    public function createDecoder(string $format): DecoderInterface
    {
        switch ($format) {
            case Format::JSON:
                return new JsonDecoder();
            case Format::XML:
                return new XmlDecoder();
            default:
                throw new \RuntimeException(sprintf('No decoder found for format "%s".', $format));
        }
    }
}