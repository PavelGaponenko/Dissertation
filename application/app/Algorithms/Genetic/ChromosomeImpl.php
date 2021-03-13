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

    public function mutate(int $percentageMutations): void
    {
        $probability = rand(1, 99);
        if ($percentageMutations > $probability) {
            $indexes = $this->generateTwoIndexes();
            $temp = $this->genes[$indexes['first']];
            $this->genes[$indexes['first']] = $this->genes[$indexes['second']];
            $this->genes[$indexes['second']] = $temp;
            return;
        }
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
            if ($begin instanceof Gene && $end instanceof Gene) {
                $this->value += $graph[$begin->getIdentifier()][$end->getIdentifier()];
                $begin = $end;
            }
        }
    }

    public function getState(): string
    {
        $state = "";
        foreach ($this->genes as $gene) {
            if ($gene instanceof Gene) {
                $state .=  $gene->getState()['identifier'];
            }
        }

        return $state;
    }

    private function createStartingTop(array $startingTop): void
    {
        $gene = app()->make(Gene::class);
        $gene->create($startingTop['name'], $startingTop['identifier']);
        $this->genes[] = $gene;
    }

    public function getGenes(): array
    {
        return $this->genes;
    }

    public function setGenes(array $genes): void
    {
        $this->genes = $genes;
    }

    private function generateTwoIndexes(): array
    {
        $count = count($this->genes);
        $first = rand(1, $count - 1);
        $second = rand(1, $count - 1);
        while (true) {
            if ($first != $second) {
                break;
            }
            $second = rand(1, $count - 1);
        }

        return [
            'first' => $first,
            'second' => $second
        ];
    }
}
