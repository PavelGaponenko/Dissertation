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

    public function run(): void
    {
        $i = 0;
        while ($i < $this->numberGenerations) {
            $this->population->crossover();
            $this->population->setState();
            $this->population->selection();
            $i++;
        }
    }

    public function getResult(): array
    {
        $result = [
            'best' => '',
        ];
        $chromosome = $this->population->getBestChromosome();
        foreach ($chromosome->getGenes() as $gene) {
            $result['best'] .= $gene->getIdentifier();
        }

        return $result;
    }
}
