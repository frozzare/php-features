<?php

namespace Frozzare\Tests\Features;

class FeaturesTest extends \PHPUnit\Framework\TestCase
{
    public function testFeatures()
    {
        $this->assertFalse(features()->enabled('test'));
        features()->enable('test');
        $this->assertTrue(features()->enabled('test'));
        features()->disable('test');
        $this->assertFalse(features()->enabled('test'));
    }

    public function testFeaturesWithDefaultData()
    {
        features([
            'test' => true
        ]);

        $this->assertTrue(features()->enabled('test'));
        features()->disable('test');
        $this->assertFalse(features()->enabled('test'));
    }
}
