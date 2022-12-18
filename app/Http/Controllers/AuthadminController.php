<?php

namespace App\Http\Controllers;

use App\Admin;
use Auth;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthadminController extends Controller
{
    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function login()
    {
        return view('newadmin.login');
    }

    public function register()
    {
        return view('admin.register');
    }

    public function adminProfileIndex()
    {
        return view('newadmin.profile.profile');
    }

    public function adminProfileIndexUpdate(Request $request, $id)
    {
        $admin = Admin::find($id);
        $admin->name =$request->name;
        $admin->email =$request->email;
        $admin->save();
        alert()->success('SuccessAlert', 'Malumotlaringiz yangilandi');
        return back();
    } public function adminProfileIndexUpdatePassword(Request $request, $id)
    {

            $new = $request->password;
            $confirm = $request->confirm_password;

            $user = Admin::find($id);


            $request->validate([
                'password' => 'required|min:4',

                'confirm_password' => 'required|required_with:password|same:password|min:4'
            ]);
            if ($new == $confirm) {


                $user->password = Hash::make($new);
                $user->save();

                alert()->success('Bilgileriniz Güncellendi!', "Bayi hesabınızdaki bilgileriniz güncellenmiştir")->showConfirmButton('Tamam', '#243e7d');
                return back()->withInput();



        } else {
            return back();
        }

    }

    public function logout()
    {

        Auth::guard('admin')->logout();
        return redirect()->route('home');
    }

    public function loginPost(Request $request)
    {

        $remember_me = $request->has('remember') ? true : false;

        if (Auth::guard('admin')->attempt(['email' => $request['email'], 'password' => $request['password']], $remember_me)) {
            return redirect()->intended('admins');
        } else {
            alert()->error('Error', 'Emailingiz yoki  Parolingiz Hato');
            return back()->withInput();
        }
    }

    public function registerPost(Request $request)
    {

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        if ($request) {
            $user = new Admin;
            $user->name = $name;
            $user->email = $email;
            $user->password = bcrypt($password);
            $user->save();
            alert()->success('SuccessAlert', 'Lorem ipsum dolor sit amet.');

            return redirect()->route('admin');
        }
    }
}
