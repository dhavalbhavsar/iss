<?php

namespace ImageProcessing;

class CoverStrategy implements ImageStrategyInterface
{
    public function calculateDimensions(array $imageA, array $imageB): array
    {
        return $imageB;
    }
}