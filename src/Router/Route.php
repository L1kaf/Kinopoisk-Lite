<?php

namespace App\Router;

class Route
{
    public function __construct(
        private $uri,
        private $method,
        private $action
    ) { 
    }

    public static function get($uri, $action): static
    {
        return new static($uri, 'GET', $action);
    }

    public static function post($uri, $action): static
    {
        return new static($uri, 'POST', $action);
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getAction(): callable
    {
        return $this->action;
    }
}