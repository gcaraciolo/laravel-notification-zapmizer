<?php

namespace NotificationChannels\Zapmizer\Test\Unit;

use NotificationChannels\Zapmizer\Test\TestCase;
use NotificationChannels\Zapmizer\Zapmizer;

class ZapmizerTest extends TestCase
{
    public function testOverrideDefaultConfig()
    {
        config()->set('zapmizer.api_token', 'test');
        
        $this->assertEquals('test', app(Zapmizer::class)->getToken());
        $this->assertEquals('prod', app(Zapmizer::class, ['api_token' => 'prod'])->getToken());
    }
}
