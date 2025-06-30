<?php

namespace NotificationChannels\Zapmizer\Test;

use Orchestra\Testbench\Concerns\WithWorkbench;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    use WithWorkbench;

    protected function defineEnvironment($app)
    {
        // 
    }
}
