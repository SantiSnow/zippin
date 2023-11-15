<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class representing the 'products' table.
 *
 * @property int $id
 * @property string $name
 * @property int $amount
 * @property string $category
 */
class Product extends Model
{
    use HasFactory;

    //TODO: Category property may be a new Model/Relationship in a more complex system. Left as string for simplicity
    protected $fillable = [
        'name',
        'amount',
        'category',
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
