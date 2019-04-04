<?php

namespace Demo;

/**
 * Class Alpha
 * @package Demo
 */
class Alpha
{
    /**
     * @var Beta
     */
    protected $beta;

    /**
     * Alpha constructor.
     *
     * @param Beta $b
     */
    public function __construct(Beta $b)
    {
        $this->beta = $b;
    }

    public function myMethod()
    {
        return $this->beta->doSomething('hello', 'world');
    }
}
