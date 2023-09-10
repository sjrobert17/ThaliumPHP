<?php

namespace sjrobert17\ThaliumPHP;

use \WildWolf\Utils\Singleton;

class Config
{

    use Singleton;

    public $configuration;

    public function __construct()
    {
        $this->configuration = [];
    }

    public function get()
    {
        return $this->configuration;
    }

    public function loadConfigurationFolder($folder)
    {
        if (file_exists($folder)) {
            foreach (glob(realpath($folder) . '/*.php') as $filename) {
                $this->loadConfigurationFile($filename);
            }
        }
    }

    public function loadConfigurationFile($filename)
    {
        if (file_exists($filename)) {
            $info = pathinfo($filename);
            $name = basename($filename, '.' . $info['extension']);

            $config = [];
            if (isset($this->configuration[$name])) {
                $config = $this->configuration[$name];
            }
            $this->configuration[$name] = array_merge($config, require($filename));
        }
    }
}
