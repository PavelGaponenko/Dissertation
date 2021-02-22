<?php

namespace App\Algorithms\Genetic;

interface Gene
{
    public function create(string $name, int $identifier): void;
    public function getName(): string;
    public function getIdentifier(): int;
}
