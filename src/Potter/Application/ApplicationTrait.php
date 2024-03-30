<?php

declare(strict_types=1);

namespace Potter\Application;

use \Potter\{
    Container\ContainerInterface,
    Session\SessionInterface
};

trait ApplicationTrait 
{
    final public function runningInConsole(): bool
    {
        return php_sapi_name() == 'cli';
    }
    
    abstract public function getContainer(): ContainerInterface;
}