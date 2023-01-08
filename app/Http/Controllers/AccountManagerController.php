<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountManagerController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/pages/account');
    }
    public function show()
    {
        // Session::forget('cart');
        return view('admin.pages.account');
    }
    public function all_user(){
        $all_user=DB::table ('users')->get();
        return view('admin.pages.account',compact('all_user'));

    }
    public function view_profile($user_id){
        $id=DB::table('users')->where('id',$user_id)->get();
        return view('admin.pages.viewuser',compact('id'));

    }
    public function search(Request $request)
    {
        $all_user= DB::Table('users')->where('name','LIKE','%'.$request->ten.'%')->get();
           
            return view('admin.pages.account', compact('all_user'));
    }
}
