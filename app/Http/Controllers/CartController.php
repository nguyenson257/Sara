<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addProduct(Request $request)
    {
        $data = $request->all();
        $session_id = substr(md5(microtime()),rand(0,26),5);
        $cart = Session::get('cart');
        if($cart != null){
            $is_available = 0;
            foreach($cart as $key => $val){
                if($val['product_id']==$data['id']){
                    $is_available++;
                    $cart[$key]['product_qty'] += $data['quantity'];
                }
            }
            if($is_available == 0){
                $new_product = [
                    'session_id' => $session_id,
                    'product_id' => $data['id'],
                    'product_name' => $data['name'],
                    'product_image' => $data['image'],
                    'product_qty' => $data['quantity'],
                    'product_price' => $data['price'],
                ];
                array_push($cart,$new_product);
            }
        }else{
            $cart[] = array(
                'session_id' => $session_id,
                'product_id' => $data['id'],
                'product_name' => $data['name'],
                'product_image' => $data['image'],
                'product_qty' => $data['quantity'],
                'product_price' => $data['price'],
            );
        }
        Session::put('cart',$cart);
        Session::save();
        $qtyCart = sizeof(Session::get('cart'));
        return response()->json(['success' => "Add product successful", 'qtyCart' => $qtyCart]);
    }
    public function show()
    {
        // Session::forget('cart');
        return view('shop.pages.cart');
    }
    public function updateProduct(Request $request)
    {
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');
        $subtotal = 0;
        $carts = Session::get('cart');
        if($carts==true){
            foreach($carts as $index => $cart){
                if($cart['product_id']==$product_id){
                    $carts[$index]['product_qty'] = $quantity;
                    $subtotal = $carts[$index]['product_qty'] * $carts[$index]['product_price'];
                }
            }
            Session::put('cart',$carts);
            return response()->json(['subtotal'=>number_format($subtotal).' '.'vnd']);
        }
    }
    public function deleteProduct(Request $request)
    {
        $product_id = $request->input('product_id');
        $carts = Session::get('cart');
        if($carts == true){
            foreach($carts as $index => $cart){
                if($cart['product_id']==$product_id){
                    unset($carts[$index]);
                }
            }
            Session::put('cart',$carts);
            return response()->json(['msg' => "Done"]);
        }
        return response()->json(['msg' => "Fails"]);

    }
}
