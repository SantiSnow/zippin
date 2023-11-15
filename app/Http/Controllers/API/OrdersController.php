<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\ShippingAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class OrdersController extends Controller
{
    public function getAll(): \Illuminate\Http\Response
    {
        return response([
            'orders' => Order::orderBy('id', 'desc')
                ->with('products')
                ->with('shipping_address')
                ->paginate(25),
        ]);
    }

    public function getSingle($id): \Illuminate\Http\Response
    {
        return response([
            'order' => Order::with('products')->with('shipping_address')->find($id),
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required|string|max:255",
            "address" => "required|string|max:255",
            "city" => "required|string|max:255",
            "state" => "required|string|max:255",
            "payment_method" => "required|numeric",
            "products" => "required|array",
        ]);

        if ($validator->fails())
        {
            return response([
                "message" => "Validation error",
                "errors" => $validator->errors(),
            ], 401);
        }

        //TODO: Install a payment library and customize logic
        //TODO: Approved field must depend from result of payment library
        $order = Order::create([
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'payment_method' => $request->payment_method,
            'approved' => 1,
        ]);

        foreach ($request->products as $product)
        {
            $product = Product::find($product['id']);

            if (!$product)
            {
                return response([
                    "message" => "Error loading products",
                    "errors" => "Product not found",
                ], 401);
            }

            DB::table('order_product')->insert([
                'order_id' => $order->id,
                'product_id' => $product->id,
            ]);
        }

        //If shipping address exists, means that it can be different from billing address
        if ($request->shipping_address)
        {
            ShippingAddress::create([
                'address' => $request['shipping_address']['address'],
                'city' => $request['shipping_address']['city'],
                'state' => $request['shipping_address']['state'],
                'order_id' => $order->id,
            ]);
        }

        //TODO: We can wrap all in DB Transaction, to be sure if anything fails, no orphan data gets created

        return response([
            "message" => "Order created successfully",
        ], 201);
    }
}
