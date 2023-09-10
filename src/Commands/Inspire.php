<?php

namespace sjrobert17\ThaliumPHP\Commands;

use sjrobert17\ThaliumPHP\Command;
use Symfony\Component\Console\Command\Command as SymfonyCommand;

class Inspire extends Command
{

    public $name = 'inspire';

    protected function execute($input, $output)
    {
        $output->writeln(sprintf('Hello World!'));
        return SymfonyCommand::SUCCESS;
    }

}