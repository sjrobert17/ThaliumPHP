<?php

namespace sjrobert17\ThaliumPHP;

class Application
{

    public $container;

    public function __construct()
    {
        $this->container = Container::instance();

        $config = Config::instance();
        $config->loadConfigurationFolder(dirname(__FILE__) . '/Config');
        $this->container->set('config', $config);

        $this->container->init();
    }
}
