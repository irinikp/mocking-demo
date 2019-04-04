<?php

namespace Demo;

/**
 * Class Assigner
 * @package Demo
 */
class Assigner
{
    /**
     * @param \stdClass $input_object
     * @param string    $property
     *
     * @return string
     */
    public static function assignIfPropertyExists($input_object, $property)
    {
        if (isset($input_object)) {
            if (property_exists($input_object, $property)) {
                return $input_object->$property;
            }
        }
        return '';
    }
}