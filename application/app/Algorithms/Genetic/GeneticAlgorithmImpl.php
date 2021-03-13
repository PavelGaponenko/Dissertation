<?php

namespace App\Algorithms\Genetic;

use App\Dto\GeneticData;

class GeneticAlgorithmImpl implements GeneticAlgorithm
{

    private Population $population;
    private int $numberGenerations;

    public function __construct(Population $population)
    {
        $this->population = $population;
    }

    public function init(GeneticData $geneticData): void
    {
        $this->numberGenerations = $geneticData->getNumberGenerations();
        $this->population->init($geneticData);
        $this->population->create();
    }

    public function run(): array
    {
        $i = 0;
        while ($i < $this->numberGenerations) {
            $this->population->crossover();
            $this->population->setState();
            $this->population->selection();
            $i++;
        }

        return $this->population->getState();
    }
}
