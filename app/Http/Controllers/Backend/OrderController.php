<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = DB::table('orders')->orderBy('id', 'DESC')->get();
        return view("backend.order.index", compact('orders'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string|in:Pending,Processing,Ready to Ship,Delivered',
        ]);

        $order = DB::table('orders')->where('id', $id)->first();

        if ($order) {
            DB::table('orders')
            ->where('id', $id)
            ->update(['status' => $request->input('status')]);

            return redirect()->back()->with('success', 'Order status updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Order not found.');
        }
    }
}
