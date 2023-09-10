<?php

namespace sjrobert17\ThaliumPHP;

use \PhpBench\DependencyInjection\Container as PhpBenchContainer;
use \WildWolf\Utils\Singleton;

class Container
{

    use Singleton;

    protected $container;

    public function __construct()
    {
        $this->container = new PhpBenchContainer();
        $this->container->init();
    }

    public function has($id)
    {
        return $this->container->has($id);
    }

    public function get($id)
    {
        return $this->container->get($id);
    }

    public function set($id, $instance)
    {
        return $this->container->set($id, $instance);
    }
}
