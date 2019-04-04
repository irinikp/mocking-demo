<?php

namespace Demo;

/**
 * Class CatImage
 * @package Demo
 */
class CatImage
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $url;

    /**
     * @param \stdClass $cat_attributes
     *
     * @return CatImage
     */
    public static function populate($cat_attributes)
    {
        $cat = new CatImage();
        if (isset($cat_attributes)) {
            $cat->id  = Assigner::assignIfPropertyExists($cat_attributes, 'id');
            $cat->url = Assigner::assignIfPropertyExists($cat_attributes, 'url');
        }
        return $cat;
    }

}