<?php

namespace App\Algorithms\Genetic;

use App\Dto\GeneticData;

interface GeneticAlgorithm
{
    public function init(GeneticData $geneticData): void;
    public function run(): void;
    public function getResult(): array;
}
