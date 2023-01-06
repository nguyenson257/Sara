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
    public function all_user()
    {
        $all_user = DB::table('users')->get();
        return view('admin.pages.account', compact('all_user'));
    }
    public function view_profile($user_id)
    {
        $id = DB::table('users')->where('id', $user_id)->get();
        return view('admin.pages.viewuser', compact('id'));
    }
    public function search(Request $request)
    {
        $data = $request->all();
        if ($data['query']) {
            $user = User::where('name', 'LIKE', '%' . $data['query'] . '%')->get();
            $ouput = '<ul class="dropdown-menu" style="display:block;position:relative">';
            foreach ($user as $key => $val) {
                $ouput .= '<li><a href="#">' . $val->name . '</a></li>';
            }
            $ouput .= '</ul>';
            echo $ouput;
        }
    }
}
