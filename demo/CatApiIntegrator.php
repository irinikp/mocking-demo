<?php

namespace Demo;

require __DIR__ . '/../env.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class CatApiIntegrator
 * @package Demo
 */
class CatApiIntegrator
{
    const BASE_URL  = "https://api.thecatapi.com/v1/";
    const CLASS_URL = "images/";

    /**
     * @var Client
     */
    protected $client;
    /**
     * @var array
     */
    protected $headers;

    /**
     * CatApiIntegrator constructor.
     */
    public function __construct()
    {
        $this->client  = new Client([
            'base_uri' => self::BASE_URL,
            'timeout'  => 2.0
        ]);
        $this->headers = ['x-api-key:' . getenv('CAT_API_KEY')];
    }


    /**
     * @param int $image_id
     *
     * @return mixed the value encoded in <i>json</i> in appropriate
     * PHP type. Values true, false and
     * null (case-insensitive) are returned as <b>TRUE</b>, <b>FALSE</b>
     * and <b>NULL</b> respectively. <b>NULL</b> is returned if the
     * <i>json</i> cannot be decoded or if the encoded
     * data is deeper than the recursion limit.
     *
     * @throws GuzzleException
     */
    public function get($image_id)
    {
        return json_decode(($this->client->request(
            'GET',
            "images/$image_id",
            ['headers' => $this->headers]
        ))->getBody());
    }

}
