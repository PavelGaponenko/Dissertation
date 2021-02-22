<?php

namespace App\Algorithms\Genetic;

class ChromosomeImpl implements Chromosome
{

    private array $genes;
    private int $value;

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

    public function mutate(): void
    {
        // TODO: Implement mutate() method.
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function calculateValue(array $graph): void
    {
        $this->value = 0;
        $begin = $this->genes[0];
        for ($i = 1; $i < count($this->genes); $i++) {
            $end = $this->genes[$i];
            $this->value += $graph[$begin->getIdentifier()][$end->getIdentifier()];
            $begin = $end;
        }
    }

    public function getState(): string
    {
        $state = "";
        foreach ($this->genes as $gene) {
            $state .=  $gene->getState()['identifier'];
        }

        return $state;
    }

    private function createStartingTop(array $startingTop): void
    {
        $gene = app()->make(Gene::class);
        $gene->create($startingTop['name'], $startingTop['identifier']);
        $this->genes[] = $gene;
    }
}
