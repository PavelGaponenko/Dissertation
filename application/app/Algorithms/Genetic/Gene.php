<?php

namespace App\Algorithms\Genetic;

interface Gene
{
    public function getName(): string;
    public function getIdentifier(): int;
}
