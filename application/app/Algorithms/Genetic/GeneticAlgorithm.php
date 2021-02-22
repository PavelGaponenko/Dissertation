<?php

namespace App\Algorithms\Genetic;

interface GeneticAlgorithm
{
    public function run(array $params): void;
}
