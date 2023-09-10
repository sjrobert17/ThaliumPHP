<?php

namespace sjrobert17\ThaliumPHP;

use Symfony\Component\Console\Command\Command as SymfonyCommand;

class Command
{

    protected $SymfonyCommand;
    protected $name;
    protected $description = '';
    protected $help = '';
    protected $arguments = [];

    public function __construct() {
        $this->SymfonyCommand = new SymfonyCommand();
        $this->setName($this->name);
        $this->setDescription($this->description);
        $this->setHelp($this->help);
        if ($this->arguments) {
            foreach ($this->arguments as $argument){
                $this->addArgument(...$argument);
            }
        }
    }

    public function setName($string)
    {
        $this->SymfonyCommand->setName($string);
    }

    public function setDescription($description)
    {
        $this->SymfonyCommand->setDescription($description);
    }

    public function setHelp($help)
    {
        $this->SymfonyCommand->setHelp($help);
    }

    public function addArgument(
        string $name,
        int $mode = null,
        string $description = '',
        mixed $default = null
    ) {
        $this->SymfonyCommand->addArgument(
            $name,
            $mode,
            $description,
            $default
        );
    }

}
