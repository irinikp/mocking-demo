<?php
namespace Demo;

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
