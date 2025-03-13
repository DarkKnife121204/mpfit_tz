<?php

namespace App\Http\Controllers;


use App\Http\Requests\OrderStoreRequest;
use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('order.index', compact('orders'));
    }

    public function show(Order $order)
    {
        return view('order.show', compact('order'));
    }

    public function create()
    {
        return view('order.create');
    }

    public function store(OrderStoreRequest $request)
    {
        $validated = $request->validated();

        $total_price = Product::find($validated['product_id'])->price * $validated['quantity'];
        Order::create([
            'full_name' => $validated['full_name'],
            'comment' => $validated['comment'],
            'product_id' => $validated['product_id'],
            'total_price' => $total_price,

        ]);

        return redirect()->route('order.index');
    }

    public function edit(Order $order)
    {
        return view('order.edit', compact('order'));
    }

    public function update(Order $order)
    {
        $order->update(['status' => 'completed']);

        return redirect()->route('order.index');
    }

}
