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

    public function singleOrder(int $id)
    {
        return view('order', [
            'order' => Order::with('shipping_address')
                ->with('products')
                ->withCount('products')
                ->find($id)
        ]);
    }
    //TODO: Create single view to see more info about each order
}
