<?php

declare(strict_types=1);

namespace Potter\Application;

use \Psr\Container\ContainerInterface;

trait ApplicationTrait 
{
    final public function runningInConsole(): bool
    {
        return php_sapi_name() == 'cli';
    }
    
    abstract public function getContainer(): ContainerInterface;
}