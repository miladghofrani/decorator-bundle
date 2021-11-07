<?php

declare(strict_types=1);

namespace MiladGhofrani\DecoratorBundle\Transformer;

use MiladGhofrani\DecoratorBundle\Decoder\GenericDecoder;
use MiladGhofrani\DecoratorBundle\Contract\TransformerInterface;
use Doctrine\Common\Collections\ArrayCollection;

class TransformerService
{
    private GenericDecoder $decoder;

    public function __construct(GenericDecoder $decoder)
    {
        $this->decoder = $decoder;
    }

    public function transformItem(
        TransformerInterface $transformer,
        string $format,
        $responseData
    ): TransformedResponseResource {
        $decodedArrayData = $this->decoder->decode($responseData, $format);

        return $this->handleTransformation($transformer, $decodedArrayData);
    }

    public function transformCollection(
        $transformer,
        $format,
        $apiResponseData,
        string $collectionKey = null
    ): ArrayCollection {
        $decodedArrayData = $this->decoder->decode($apiResponseData, $format);

        if ($collectionKey !== null) {
            $decodedArrayData = $decodedArrayData[$collectionKey];
        }

        $collection = array_map(function ($item) use ($transformer) {

            return $this->handleTransformation($transformer, $item);

        }, $decodedArrayData);

        return new ArrayCollection($collection);
    }

    private function handleTransformation($transformer, $item): TransformedResponseResource
    {
        $transformedData = $transformer->transform($item);

        return new TransformedResponseResource($transformedData);
    }
}