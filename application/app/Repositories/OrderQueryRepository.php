<?php

namespace App\Repositories;

use App\Models\Order;

class OrderQueryRepository
{
    public function getOrderById(int $id): ?Order
    {
        return Order::where('id', '=', $id)->first();
    }

    public function getOrders()
    {
        return Order::all();
    }
}
