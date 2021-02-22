<?php

namespace App\Algorithms\Genetic;

class GeneImpl implements Gene
{

    private string $name;
    private int $identifier;

    public function create(string $name, int $identifier): void
    {
        $this->name = $name;
        $this->identifier = $identifier;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getIdentifier(): int
    {
        return $this->identifier;
    }
}
