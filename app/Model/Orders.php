<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    public function order_items()
    {
        return $this->belongsToMany('App\Model\OrderItem', 'order_items');
    }
}
