<?php

namespace App\Http\Controllers;

use App\Algorithms\Genetic\GeneticAlgorithm;
use App\Dto\GeneticData;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware(AuthMiddleware::class);
    }

    public function create()
    {
        return view('app');
    }

    public function orders()
    {
        return view('app');
    }
}
