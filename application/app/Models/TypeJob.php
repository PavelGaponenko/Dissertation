<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 *
 * @property int $id
 * @property string $name
 *
 * @package App\Models
 */
class TypeJob extends Model
{
    protected $table = 'types_jobs';

    public function orders()
    {
        return $this->belongsToMany(
            Order::class,
            'orders',
            'type_job_id',
        );
    }
}
