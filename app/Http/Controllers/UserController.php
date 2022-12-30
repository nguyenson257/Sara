<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;
use Laravel\Socialite\Facades\Socialite;
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

        if ($user->role_id == 2) {
            return Redirect::to('/admin');
        }

        if ($user->role_id == 1) {
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
        return view('shop/pages/profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('shop/pages/edit_profile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $today = date("Y-m-d");
        $error = '';
        ($request->name == '') ? $error .= 'Name invalid! ' : $error .= '';
        ($request->email == '') ? $error .= 'Email invalid! ' : $error .= '';
        ($request->phone == '') ? $error .= 'Phone number invalid! ' : $error .= '';
        ($request->date == '') ? $error .= 'Date of birth invalid! ' : $error .= '';
        (strlen($request->phone) > 11 || strlen($request->phone) < 9) ? $error .= 'Phone number invalid! ' : $error .= '';
        ($request->date > $today) ? $error .= 'Date of birth invalid! ' : $error .= '';

        $arr_phone = str_split($request->phone);
        $arr_check = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
        foreach ($arr_phone as $kt)
        {
            if (!in_array($kt, $arr_check))
            {
                $error .= 'Phone number invalid! ';
                break;
            }
        }

        if ($error != '') {
            Session::put('fail', $error);
            return Redirect::to('/edit_profile');
        }

        $user = Session::get('user');

        $data = array();
        $data['role_id'] = 1;
        $data['email'] = $request->email;
        $data['password'] = $user->password;
        $data['name'] = $request->name;
        $data['date_of_birth'] = $request->date;
        $data['phone_number'] = $request->phone;

        $result = User::where('id', $user->id)->update($data);

        if($result) {

            $new_user = User::where('id', $user->id)->first();
            Session::put('user', $new_user);
            return Redirect::to('/profile');
        } else {

            Session::put('fail', '<script type="text/javascript">alert("Update fail!")</script>');
            return Redirect::to('/edit_profile');
        }
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

    public function login_facebook()
    {
        $user_facebook = Socialite::driver('facebook')->user();

        $user = User::whereIn('email', [$user_facebook->getEmail()])->first();

        if($user) {
            Session::put('user', $user);

            if ($user->role_id == 2) {
                return Redirect::to('/admin');
            }

            if ($user->role_id == 1) {
                return Redirect::to('/');
            }
        } else {
            $data = array();
            $data['role_id'] = 1;
            $data['email'] = $user_facebook->getEmail();
            $data['password'] = bcrypt('12345678');
            $data['name'] = $user_facebook->getName();

            $result = User::create($data);

            if($result) {

                $user = User::whereIn('email', [$user_facebook->getEmail()])->first();
                Session::put('user', $user);
                return Redirect::to('/');
            } else {

                Session::put('fail', '<script type="text/javascript">alert("Error!");</script>');
                return Redirect::to('/register');
            }
        }
    }

    public function login_google()
    {
        $user = Socialite::driver('google')->user();
        dd($user->getEmail() . ' - ' . $user->getName());
//        dd($user);
    }
}
