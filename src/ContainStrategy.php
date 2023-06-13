<?php

namespace ImageProcessing;

class ContainStrategy implements ImageStrategyInterface
{
    public function calculateDimensions(array $imageA, array $imageB): array
    {
        $aspectRatioA = $imageA['width'] / $imageA['height'];
        $aspectRatioB = $imageB['width'] / $imageB['height'];

        if ($aspectRatioA > $aspectRatioB) {
            $width = $imageA['height'] * $aspectRatioB;
            $height = $imageA['height'];

        } else {
            $width = $imageA['width'];
            $height = $imageA['width'] / $aspectRatioB;
        }

        if($width > $imageB['width'] && $height > $imageB['height']) {
            $width = $imageB['width'];
            $height = $imageB['height'];
        }

        return ['width' => $width, 'height' => $height];
    }
}