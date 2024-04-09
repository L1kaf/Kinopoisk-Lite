<?php

namespace App\Middleware;

use App\Kernel;

class AuthMiddleware extends Kernel\Middleware\AbstractMiddleware
{
    public function handle(): void
    {
        if (! $this->auth->check()) {
            $this->redirect->to('/login');
        }
    }
}
