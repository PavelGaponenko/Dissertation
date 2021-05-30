<?php

namespace App\Http\Controllers;

use App\Algorithms\Genetic\GeneticAlgorithm;
use App\Dto\GeneticData;
use App\Dto\OrderDto;
use App\Http\Middleware\AuthMiddleware;
use App\Repositories\OrderCommandRepository;
use App\Repositories\OrderQueryRepository;
use App\Repositories\TypeJobQueryRepository;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware(AuthMiddleware::class);
    }

    public function create(Request $request, TypeJobQueryRepository $repository)
    {
        $typesJobs = $repository->getTypeJobs();
        return view('app', ['typesJobs' => $typesJobs]);
    }

    public function addOrder(Request $request, OrderCommandRepository $repository)
    {
        $dto = new OrderDto();
        $dto->setName($request->input('name') ?? '');
        $dto->setType($request->input('type') ?? '');
        $dto->setOrderDate($request->input('order_date') ?? '');
        $dto->setJobTime($request->input('job_time') ?? '');
        $dto->setStartDate($request->input('start_date') ?? '');
        $dto->setFinishDate($request->input('finish_date') ?? '');
        $dto->setCoordinateX($request->input('coordinate_x') ?? 0.0);
        $dto->setCoordinateY($request->input('coordinate_y') ?? 0.0);

        $repository->create($dto);

        return redirect('create');
    }

    public function orders(OrderQueryRepository $repository)
    {
        $orders = $repository->getOrders();

        return view('app', ['orders' => $orders]);
    }
}
