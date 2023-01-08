<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Redirect;

class OrderManagerController extends Controller

{
    protected $order;
    //
    public function index()
    {
        return view('admin/pages/order');
    }
    public function all_order(){
        $all_order=DB::table ('orders')->get();
        return view('admin.pages.order',compact('all_order'));

    }
    public function update_status(Request $request,$id){
        $order=$this->order->findOrFail($id);
        $order->update(['status'=>$request->status]);
        return response()->json([
            'message'=>'success'
        ],Response::HTTP_OK);
    }
    public function view_order($id_order){
        $id=DB::table('orders')->where('id',$id_order)->get();
        return view('admin.pages.vieworder',compact('id'));
    }
    public function print_order_convert($checkout_code)
    {
        $order = DB::table('orders')->where('id',$checkout_code)->get();
        $user = DB::table('users')->where('id',$order[0]->user_id)->get();
        return view('admin.pages.invoice')->with('order',$order)->with('user',$user);
    }
    public function delete_order($order_id)
    {
        $order = DB::table('orders')->where('id', $order_id)->first();
        $id = $order->id;
        DB::table('order_products')->where('order_id', $id)->delete();
        DB::table('orders')->where('id', $order_id)->delete();
        return Redirect::to('all-orderadmin');
    }
}
