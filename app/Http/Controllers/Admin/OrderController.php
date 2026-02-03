<?php

namespace App\Http\Controllers\Admin;
use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest()->get();
        return view('admin.orders.index',compact('orders'));
    }
    public function updateStatus(Request $request, Order $order)
{
    $order->status = $request->status;
    $order->save();

    return back()->with('success', 'Cập nhật trạng thái thành công');
}

}
