<?php

declare(strict_types=1);

namespace MiladGhofrani\DecoratorBundle\Decoder\Handlers;

use MiladGhofrani\DecoratorBundle\Decoder\Contract\DecoderInterface;
use Symfony\Component\Serializer\Encoder\JsonDecode;

class JsonDecoder implements DecoderInterface
{
    public function decode($data): array
    {
        $jsonDecoder = new JsonDecode();

        return $jsonDecoder->decode($data, 'json', [
            'json_decode_associative' => true
        ]);
    }
}