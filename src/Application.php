<?php

namespace sjrobert17\ThaliumPHP;

class Application
{

    public $container;

    public function __constructor()
    {
        $this->container = Container::instance();
    }
}
