<?php

namespace App\Dto;

class GeneticData
{
    private int $numberGenerations;
    private int $populationSize;
    private int $percentageMutations;
    private array $startingTop;
    private array $tops;
    private array $graph;

    /**
     * GeneticData constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->numberGenerations = $data['params']['number_generations'];
        $this->populationSize = $data['params']['population_size'];
        $this->percentageMutations = $data['params']['percentage_mutations'];
        $this->startingTop = $data['params']['starting_top'];
        $this->tops = $data['tops'];
        $this->graph = $data['graph'];
    }

    /**
     * @return int|mixed
     */
    public function getNumberGenerations(): int
    {
        return $this->numberGenerations;
    }

    /**
     * @return int|mixed
     */
    public function getPopulationSize(): int
    {
        return $this->populationSize;
    }

    /**
     * @return int|mixed
     */
    public function getPercentageMutations(): int
    {
        return $this->percentageMutations;
    }

    /**
     * @return array|mixed
     */
    public function getStartingTop(): array
    {
        return $this->startingTop;
    }

    /**
     * @return array|mixed
     */
    public function getTops(): array
    {
        return $this->tops;
    }

    /**
     * @return array|mixed
     */
    public function getGraph(): array
    {
        return $this->graph;
    }
}
