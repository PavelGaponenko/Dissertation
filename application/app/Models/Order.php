<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string $order_date
 * @property string $job_time
 * @property string $start_date
 * @property string $finish_date
 * @property float $coordinate_x
 * @property float $coordinate_y
 *
 * @package App\Models
 */
class Order extends Model
{
    protected $table = 'orders';
}
