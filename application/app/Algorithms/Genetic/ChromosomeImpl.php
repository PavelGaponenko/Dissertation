<?php

namespace App\Algorithms\Genetic;

class ChromosomeImpl implements Chromosome
{

    private array $genes;

    public function create(array $startingTop, array $tops): void
    {
        $this->createStartingTop($startingTop);
        shuffle($tops);
        for ($i = 0; $i < count($tops); $i++) {
            $gene = app()->make(Gene::class);
            $gene->create($tops[$i]['name'], $tops[$i]['identifier']);
            $this->genes[] = $gene;
        }
    }

    private function createStartingTop(array $startingTop): void
    {
        $gene = app()->make(Gene::class);
        $gene->create($startingTop['name'], $startingTop['identifier']);
        $this->genes[] = $gene;
    }

    public function getGenes()
    {
        return $this->genes;
    }

    public function mutate(): void
    {
        // TODO: Implement mutate() method.
    }
}
