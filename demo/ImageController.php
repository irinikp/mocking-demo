<?php

namespace Demo;

use GuzzleHttp\Exception\GuzzleException;

/**
 * Class ImageController
 * @package App\Http\Controllers
 */
class ImageController
{
    /**
     * @var CatApiIntegrator
     */
    protected $service;

    /**
     * ImageController constructor.
     *
     * @param CatApiIntegrator $service
     */
    public function __construct(CatApiIntegrator $service)
    {
        $this->service = $service;
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return CatImage
     * @throws GuzzleException
     */
    public function show($id)
    {
        $cat_json = $this->service->get($id);
        return CatImage::populate($cat_json);
    }

}
