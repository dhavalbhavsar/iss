<?php

namespace ImageProcessing;

interface ImageStrategyInterface
{
    public function calculateDimensions(array $imageA, array $imageB): array;
}