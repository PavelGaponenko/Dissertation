<?php

namespace App\Algorithms\Genetic;

interface Chromosome
{
    public function create(array $startingTop, array $tops): void;
    public function mutate(): void;
    public function calculateValue(array $graph): void;
    public function getValue(): int;
    public function getState(): string;
    public function getGenes(): array;
    public function setGenes(array $genes): void;
}
