<?php

namespace App\Repositories;

use App\Dto\OrderDto;
use App\Models\Order;

use Illuminate\Support\Facades\DB;

class OrderCommandRepository
{
    public function create(OrderDto $orderDto): Order
    {
        return DB::transaction(function () use ($orderDto) {
            $order = new Order();
            $order->name = $orderDto->getName();
            $order->type = $orderDto->getType();
            $order->order_date = $orderDto->getOrderDate();
            $order->job_time = $orderDto->getJobTime();
            $order->start_date = $orderDto->getStartDate();
            $order->finish_date = $orderDto->getFinishDate();
            $order->coordinate_x = $orderDto->getCoordinateX();
            $order->coordinate_y = $orderDto->getCoordinateY();

            $order->save();

            return $order;
        });
    }
}
