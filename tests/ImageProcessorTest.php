<?php

namespace ImageProcessing\Tests;

use ImageProcessing\ContainStrategy;
use ImageProcessing\CoverStrategy;
use ImageProcessing\ImageProcessor;
use PHPUnit\Framework\TestCase;

class ImageProcessorTest extends TestCase
{
    public function testContainStrategy()
    {
        $imageProcessor = new ImageProcessor(new ContainStrategy());
        $imageDimensions = $imageProcessor->calculateImageDimensions(
            ['width' => 180, 'height' => 250],
            ['width' => 360, 'height' => 200]
        );

        $this->assertEquals(180, $imageDimensions['width']);
        $this->assertEquals(100, $imageDimensions['height']);
    }

    public function testCoverStrategy()
    {
        $imageProcessor = new ImageProcessor(new CoverStrategy());
        $imageDimensions = $imageProcessor->calculateImageDimensions(
            ['width' => 180, 'height' => 250],
            ['width' => 100, 'height' => 500]
        );

        $this->assertEquals(180, $imageDimensions['width']);
        $this->assertEquals(900, $imageDimensions['height']);
    }
}