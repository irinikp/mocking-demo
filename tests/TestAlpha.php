<?php

namespace Tests;

require __DIR__ . '/../vendor/autoload.php';

use Demo\Alpha;
use Demo\Beta;
use Mockery;

class TestAlpha extends \PHPUnit\Framework\TestCase
{

    public function tearDown(): void
    {
        Mockery::close();
    }

    public function test_alpha_method()
    {
        $beta = Mockery::mock(Beta::class);
        $beta->shouldReceive('doSomething')->once()->withArgs(['hello', 'world'])->andReturn('I did it');

        $alpha  = new Alpha($beta);
        $output = $alpha->myMethod();

        $this->assertEquals('I did it', $output);
    }
}
