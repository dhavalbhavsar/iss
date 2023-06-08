<?php

namespace ImageProcessing;

class ImageProcessor
{
    private $strategy;

    public function __construct(ImageStrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function calculateImageDimensions(array $imageA, array $imageB): array
    {
        return $this->strategy->calculateDimensions($imageA, $imageB);
    }
}