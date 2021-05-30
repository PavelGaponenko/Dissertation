<?php


namespace App\Repositories;


use App\Models\TypeJob;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TypeJobCommandRepository
{
    public function add(string $name): TypeJob
    {
        return DB::transaction(function () use ($name) {
            $typeJob = new TypeJob();
            $typeJob->name = $name;
            $typeJob->save();

            return $typeJob;
        });
    }

    public function delete(int $id)
    {
        $typeJob = new TypeJob();
        $typeJob->find($id)->delete();
    }
}
