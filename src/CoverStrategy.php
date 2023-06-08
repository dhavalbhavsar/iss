<?php

namespace ImageProcessing;

class CoverStrategy implements ImageStrategyInterface
{
    public function calculateDimensions(array $imageA, array $imageB): array
    {
        $aspectRatioA = $imageA['width'] / $imageA['height'];
        $aspectRatioB = $imageB['width'] / $imageB['height'];

        if ($aspectRatioA > $aspectRatioB) {
            $width = $imageA['width'];
            $height = $imageA['width'] / $aspectRatioB;
        } else {
            $width = $imageA['height'] * $aspectRatioB;
            $height = $imageA['height'];
        }

        return ['width' => $width, 'height' => $height];
    }
}