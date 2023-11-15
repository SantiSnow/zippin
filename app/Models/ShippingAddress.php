<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Class representing the 'shipping_addresses' table.
 *
 * @property int $id
 * @property string $address
 * @property string $city
 * @property string $state
 * @property int $order_id
 */
class ShippingAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'city',
        'state',
        'order_id'
    ];

    public function order()
    {
        $this->belongsTo(Order::class);
    }
}
