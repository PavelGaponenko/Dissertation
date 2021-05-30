<?php

namespace App\Repositories;

use App\Models\TypeJob;

class TypeJobQueryRepository
{
    public function getTypeJobs()
    {
        return TypeJob::all();
    }
}
