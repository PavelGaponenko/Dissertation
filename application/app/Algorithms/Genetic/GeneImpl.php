<?php

namespace App\Algorithms\Genetic;

class GeneImpl implements Gene
{

    private string $name;
    private int $identifier;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setIdentifier(int $identifier): void
    {
        $this->identifier = $identifier;
    }

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

    public function getState(): array
    {
        return [
            'name' => $this->name,
            'identifier' => $this->identifier
        ];
    }
}
