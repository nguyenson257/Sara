<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;
use Session;
use App\Models\Post;
use Hash;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isNull;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shop/pages/login');
    }

    public function check_login(Request $request)
    {
        // kiểm tra dữ liệu rỗng
        if (!isset($request->email) || !isset($request->password)) {
            Session::put('fail', 'Email or password invalid!');
            return Redirect::to('/login');
        }

        $user = User::whereIn('email', [$request->email])->first();

        if (!isset($user->email)) {
            Session::put('fail', 'Email is incorrect!');
            return Redirect::to('/login');
        }

        if (!(Hash::check($request->password, $user->password))) {
            Session::put('fail', 'Password is incorrect!');
            return Redirect::to('/login');
        }

        Session::put('user', $user);

        if ($user->role_id == 1) {
            return Redirect::to('/');
        }

        if ($user->role_id == 2) {
            return Redirect::to('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('shop/pages/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // kiểm tra dữ liệu rỗng
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
        ]);

        //kiểm tra email tồn tại
        $emails = User::select('email')->get();
        foreach($emails as $email) {

            if ($request->email === $email->email) {
                Session::put('email_error', 'Email already exists!');
                return Redirect::to('/register');
            }
        }

        //kểm tra độ dài pass
        if(strlen($request->password) < 6) {
            Session::put('pass_error', 'Password too short (6 characters)!');
            return Redirect::to('/register');
        }

        // kiểm tra confirm password
        if (!($request->password == $request->confirm_password)) {

            Session::put('confirm_pass', 'Confirm password invalid!');
            return Redirect::to('/register');
        }

        $data = array();
        $data['role_id'] = 1;
    	$data['email'] = $request->email;
        $data['password'] = bcrypt($request->password);
        $data['name'] = $request->name;

        $result = User::create($data);

        if($result) {

            return Redirect::to('/login');
        } else {

            Session::put('fail', '<script type="text/javascript">alert("Error!");</script>');
            return Redirect::to('/register');
        }
    }


    public function logout()
    {
        Session::put('user', null);
        return Redirect::to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
