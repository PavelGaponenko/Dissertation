<?php

namespace App\Algorithms\Genetic;

use App\Dto\GeneticData;
use function PHPUnit\Framework\assertInstanceOf;

class PopulationImpl implements Population
{
    private array $chromosomes;
    private array $parents = [];
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
        $this->setParent();
        $breakingPoint = $this->generateBreakingPoint();
        $firstChild = array_slice($this->parents['first']->getGenes(), 0, $breakingPoint);
        $secondChild = array_slice($this->parents['second']->getGenes(), 0, $breakingPoint);

        $partFirstParent = array_slice(
            $this->parents['first']->getGenes(),
            $breakingPoint,
            count($this->parents['first']->getGenes())
        );
        $partSecondParent = array_slice(
            $this->parents['second']->getGenes(),
            $breakingPoint,
            count($this->parents['second']->getGenes())
        );

        foreach ($partSecondParent as $elem) {
            if (!in_array($elem, $firstChild)) {
                $firstChild[] = $elem;
            }
        }

        foreach ($partFirstParent as $elem) {
            if (!in_array($elem, $secondChild)) {
                $secondChild[] = $elem;
            }
        }

        foreach ($this->tops as $top) {
            if ($this->findMatch($firstChild, $top)) {
                $gene = app()->make(Gene::class);
                $gene->setName($top['name']);
                $gene->setIdentifier($top['identifier']);
                $firstChild[] = $gene;
            }
            if ($this->findMatch($secondChild, $top)) {
                $gene = app()->make(Gene::class);
                $gene->setName($top['name']);
                $gene->setIdentifier($top['identifier']);
                $secondChild[] = $gene;
            }
        }

        $this->childs['first'] = app()->make(Chromosome::class);
        $this->childs['first']->setGenes($firstChild);
        $this->childs['second'] = app()->make(Chromosome::class);
        $this->childs['second']->setGenes($secondChild);
    }

    public function selection(): void
    {
        $this->chromosomes[] = $this->childs['first'];
        $this->chromosomes[] = $this->childs['second'];

        $valuesChromosomes = [];
        foreach ($this->chromosomes as $chromosome) {
            $chromosome->calculateValue($this->graph);
            $key = $chromosome->getValue();
            $valuesChromosomes[$key] = $chromosome;
        }

        ksort($valuesChromosomes);

        $this->chromosomes = array_slice($valuesChromosomes, 0, $this->populationSize);
    }

    public function setState(): void
    {
        $chromosomes = [];
        foreach ($this->chromosomes as $chromosome) {
            $chromosome->calculateValue($this->graph);
            $chromosomes['chromosomes'][] = $chromosome->getState() . " = " . $chromosome->getValue();
        }

        foreach ($this->parents as $parent) {
            $parent->calculateValue($this->graph);
            $chromosomes['parents'][] = $parent->getState() . " = " . $parent->getValue();
        }

        foreach ($this->childs as $child) {
            $child->calculateValue($this->graph);
            $chromosomes['childs'][] = $child->getState() . " = " . $child->getValue();
        }
        $this->state[] = $chromosomes;
    }

    public function getState(): array
    {
        return $this->state;
    }

    private function setParent(): void
    {
        $countChromosomes = count($this->chromosomes);
        $firstIndex = rand(1, $countChromosomes - 1);
        while (true) {
            $secondIndex = rand(1, $countChromosomes - 1);
            if ($firstIndex != $secondIndex) {
                break;
            }
        }

        $this->parents['first'] = $this->chromosomes[$firstIndex];
        $this->parents['second'] = $this->chromosomes[$secondIndex];
    }

    private function generateBreakingPoint(): int
    {
        $countChromosomes = count($this->chromosomes);

        return rand(1, $countChromosomes - 1);
    }

    private function findMatch(array $chromosome, array $top): bool
    {
        $result = true;
        foreach ($chromosome as $gene) {
            if ($gene->getIdentifier() == $top['identifier']) {
                $result = false;
            }
        }

        return $result;
    }
}
