<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
}
