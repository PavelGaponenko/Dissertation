<?php

namespace App\Algorithms\Genetic;

interface Chromosome
{
    public function create(array $startingTop, array $tops): void;
    public function getGenes();
    public function mutate(): void;
}
