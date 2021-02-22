<?php

namespace App\Algorithms\Genetic;

class GeneImpl implements Gene
{

    private string $name;
    private int $identifier;

    public function __construct(string $name, int $identifier)
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
