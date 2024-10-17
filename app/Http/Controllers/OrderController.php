<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    public function orderCreate(OrderRequest $request) {
        
        $user = Auth::user();

        $order = Order::create([
            "user_id" => $user->id,
            "total" => 0
        ]);

        $total = 0;

        foreach($request->products as $productData){
            $product = Product::find($productData['id']);
            $quantity = $productData['quantity'];

            $total += $product->price * $quantity;

            $order->products()->attach($product->id, ["quantity" => $quantity]);
        }

        $order->total = $total; 
        $order->save();

        return response()->json([
            "order" => $order
        ],201);
    }
}
