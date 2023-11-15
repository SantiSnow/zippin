<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class representing the 'orders' table.
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $city
 * @property string $state
 * @property int $payment_method
 * @property int $approved
 */
class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    /*
     * Billing address is defined in model,
     * Shipping address is not, as they might
     * differ.
     */
    protected $fillable = [
        'name',
        'address',
        'city',
        'state',
        'payment_method',
        'approved',
    ];


    public function shipping_address()
    {
        return $this->hasOne(ShippingAddress::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
