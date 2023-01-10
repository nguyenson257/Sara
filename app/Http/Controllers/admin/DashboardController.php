<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $revenueTotal = 0;
        $orders = Order::where([
            'status' => 1,
            'payment_status' => 1
        ])->get();
        foreach($orders as $oder)
        {
            foreach($oder->products as $product)
            {

                $revenueTotal += $product['price'] * $product->pivot->quantity;
            }
        }
        $userCount = count(User::all());
        $productCount = count(Product::all());
        $orderCount = count(Order::all());
        return view('admin.pages.dashboard', compact('revenueTotal','userCount', 'productCount', 'orderCount'));
    }

}
