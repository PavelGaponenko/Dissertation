<?php

namespace App\Algorithms\Genetic;

interface Chromosome
{
    public function getValue();
    public function mutate(): void;
}
