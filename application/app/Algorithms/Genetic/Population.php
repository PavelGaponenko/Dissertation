<?php

namespace App\Algorithms\Genetic;

use App\Dto\GeneticData;

interface Population
{
    public function init(GeneticData $geneticData): void;
    public function create(): void;
    public function crossover(): void;
    public function selection(): void;
    public function setState(): void;
    public function getState(): array;
}
