<?php

namespace App\Kernel\Router;

class Route
{
    public function __construct(
        private $uri,
        private $method,
        private $action,
        private array $middlewares = [],
    ) {
    }

    public static function get($uri, $action, array $middlewares = []): static
    {
        return new static($uri, 'GET', $action, $middlewares);
    }

    public static function post($uri, $action, array $middlewares = []): static
    {
        return new static($uri, 'POST', $action, $middlewares);
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }

    public function hasMiddleware(): bool
    {
        return !empty($this->middlewares);
    }
}
