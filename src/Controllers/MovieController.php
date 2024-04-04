<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Kernel\View\View;

class MovieController extends Controller
{
    public function add(): void
    {
        $this->view('admin/movies/add');
    }

    public function store(): void
    {
        dd('store');
    }
}
