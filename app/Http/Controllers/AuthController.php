<?php

namespace App\Http\Controllers;

use App\Http\Requests\userLoginRequest;
use App\Http\Requests\userRegisterRequest;
use Auth;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function logout()
    {
        Auth::logout('web');
        return redirect()->route('home');
    }

    public function loginPost(userLoginRequest $request)
    {

        $remember_me = $request->remember ? true : false;

        if (Auth::guard('web')->attempt(['email' => $request['email'], 'password' => $request['password']], $remember_me)) {


            return redirect()->intended();
        } else {
            alert()->error('error', 'Emailingiz yoki  Parolingiz Hato');

            return back()->withInput();
        }
    }

    public function registerPost(userRegisterRequest $request)
    {
        // dd($request->all());
        $name = $request->reg_name;
        $email = $request->reg_email;
        $password = $request->reg_password;
        if ($request) {

            $user = new User;
            $user->name = $name;
            $user->email = $email;
            $user->password = bcrypt($password);
            $user->save();
            alert()->success('SuccessAlert', 'TEST');

            if (Auth::guard('web')->attempt(['email' => $request['reg_email'], 'password' => $request['reg_password']])) {


                return redirect()->intended();
            } else {
                alert()->error('error', 'Emailingiz yoki  Parolingiz Hato');

                return back()->withInput();
            }

        }
    }
}
