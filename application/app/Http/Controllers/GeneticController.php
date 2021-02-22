<?php

namespace App\Http\Controllers;

use App\Algorithms\Genetic\GeneticAlgorithm;
use Illuminate\Http\Request;

class GeneticController extends Controller
{
    public function genetic(Request $request, GeneticAlgorithm $algorithm)
    {
        $params = $request->input('genetic');
        $algorithm->run($params);
    }
}
