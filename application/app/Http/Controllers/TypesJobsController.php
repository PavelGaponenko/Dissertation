<?php

namespace App\Http\Controllers;

use App\Repositories\TypeJobCommandRepository;
use App\Repositories\TypeJobQueryRepository;
use Illuminate\Http\Request;

class TypesJobsController
{
    public function showTypes(TypeJobQueryRepository $repository)
    {
        $typesJobs = $repository->getTypeJobs();
        return view('app', ['typesJobs' => $typesJobs]);
    }

    public function addType(Request $request, TypeJobCommandRepository $repository)
    {
        $name = $request->input('name') ?? '';
        $repository->add($name);

        return redirect('types');
    }

    public function delType(Request $request, TypeJobCommandRepository $repository)
    {
        $id = $request->input('id');
        $repository->delete($id);

        return redirect('types');
    }
}
