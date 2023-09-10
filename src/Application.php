<?php

namespace sjrobert17\ThaliumPHP;

class Application
{

    public $container;

    public function __construct()
    {
        $this->container = Container::instance();
    }
}
