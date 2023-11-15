<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function dashboard()
    {
        return view('dashboard', [
            'orders' => Order::orderBy('id', 'desc')
                ->with('shipping_address')
                ->withCount('products')
                ->paginate(25)
        ]);
    }

    //TODO: Create single view to see more info about each order
}
