<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Category;

use function Ramsey\Uuid\v1;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allOrders = Order::with('category')->get();
        return view('order', ['orders' => $allOrders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $allCategories = Category::all();   
        return view('add_order', ['categories' => $allCategories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Order::create($input);
        return redirect('order')->with('flash_message', 'New Order Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $allCategories = Category::all();
        $selectedOrder = Order::find($id);
        return view('edit_order', ['categories' => $allCategories, 'order' => $selectedOrder]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $orders = Order::find($id);
        $input = $request->all();
        $orders->update($input);
        return redirect('order')->with('flash_message', 'Order Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        Order::destroy($order->id);
        return redirect('order')->with('flash_message', 'Order Deleted!');
    }
}
