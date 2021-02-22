<?php

namespace App\Algorithms\Genetic;

use App\Dto\GeneticData;

class PopulationImpl implements Population
{
    private array $chromosomes;
    private array $graph;
    private array $tops;
    private int $populationSize;
    private int $percentageMutations;
    private array $startingTop;

    public function init(GeneticData $geneticData): void
    {
        $this->percentageMutations = $geneticData->getPercentageMutations();
        $this->populationSize = $geneticData->getPopulationSize();
        $this->startingTop = $geneticData->getStartingTop();
        $this->graph = $geneticData->getGraph();
        $this->tops = $geneticData->getTops();
    }

    public function create(): void
    {
        for ($i = 0; $i < $this->populationSize; $i++) {
            $chromosome = app()->make(Chromosome::class);
            $chromosome->create($this->startingTop, $this->tops);
            $this->chromosomes[] = $chromosome;
        }
    }

    public function crossover(): void
    {
        // TODO: Implement crossover() method.
    }

    public function selection(): void
    {
        // TODO: Implement selection() method.
    }
}
