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
    
    final public function start(): void
    {
        if ($this->hasSession()) {
            $this->startSession();
        }
        if ($this->hasOutputBuffer()) {
            $this->startOutputBuffer();
        }
    }
    
    abstract public function getContainer(): ContainerInterface;
    
    abstract public function hasOutputBuffer(): bool;
    abstract public function startOutputBuffer(): void;
    
    abstract public function hasSession(): bool;
    abstract public function startSession(): void;
}