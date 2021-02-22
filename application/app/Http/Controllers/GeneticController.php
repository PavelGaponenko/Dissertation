<?php

namespace App\Http\Controllers;

use App\Algorithms\Genetic\GeneticAlgorithm;
use App\Dto\GeneticData;
use Illuminate\Http\Request;

class GeneticController extends Controller
{
    public function genetic(Request $request, GeneticAlgorithm $algorithm)
    {
        $data = $request->input('genetic');
        $geneticData = new GeneticData($data);
        $algorithm->init($geneticData);
        $state = $algorithm->run();
        return view('genetic', ['state'=> $state]);
    }
}
