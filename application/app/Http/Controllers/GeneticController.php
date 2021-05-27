<?php

namespace App\Http\Controllers;

use App\Algorithms\Genetic\GeneticAlgorithm;
use App\Dto\GeneticData;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Http\Request;

class GeneticController extends Controller
{
    public function __construct()
    {
        $this->middleware(AuthMiddleware::class);
    }

    public function genetic(Request $request, GeneticAlgorithm $algorithm)
    {
        $file = file_get_contents(__DIR__.'/data.json');
        $data = json_decode($file, true);
        $geneticData = new GeneticData($data);
        $algorithm->init($geneticData);
        $algorithm->run();
        $result = $algorithm->getResult();

        return view('app', ['result'=> $result]);
    }
}
