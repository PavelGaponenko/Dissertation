<?php

namespace App\Algorithms\Genetic;

use App\Dto\GeneticData;

class PopulationImpl implements Population
{
    private array $chromosomes;
    private array $parents;
    private array $childs;
    private array $graph;
    private array $tops;
    private int $populationSize;
    private int $percentageMutations;
    private array $startingTop;
    private array $state;

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

    public function setState(): void
    {
        $chromosomes = [];
        foreach ($this->chromosomes as $chromosome) {
            $chromosome->calculateValue($this->graph);
            $chromosomes['chromosomes'][] = $chromosome->getState() . " = " . $chromosome->getValue();
        }
        $this->state[] = $chromosomes;
    }

    public function getState(): array
    {
        return $this->state;
    }
}
