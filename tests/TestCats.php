<?php

namespace Tests;

require __DIR__ . '/../vendor/autoload.php';

use Demo\CatApiIntegrator;
use Demo\ImageController;
use Mockery;

class TestCats extends \PHPUnit\Framework\TestCase
{

    public function tearDown(): void
    {
        Mockery::close();
    }

    public function test_cat_controller()
    {
        $id      = 'klLnMZy3q';
        $service = Mockery::mock(CatApiIntegrator::class);

        $json_output = file_get_contents('data/sample_' . $id . '.json');
        $service->shouldReceive('get')->once()->withArgs([$id])->andReturn(json_decode($json_output));

        $cat = (new ImageController($service))->show($id);
        $this->assertEquals($cat->id, $id);
        $this->assertEquals($cat->url, 'https://cdn2.thecatapi.com/images/klLnMZy3q.jpg');
    }
}
