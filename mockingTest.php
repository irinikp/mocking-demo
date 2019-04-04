<?php
namespace Demo;

require_once 'vendor/autoload.php';

use \Mockery;

class Alpha
{
    protected $beta;

    public function __construct(Beta $b)
    {
        $this->beta = $b;
    }

    public function myMethod()
    {
        return $this->beta->doSomething('hello', 'world');
    }
}

class Beta
{
}

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