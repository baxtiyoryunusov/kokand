<?php

namespace App\Http\Controllers;

use App\Http\Requests\userLoginRequest;
use App\Http\Requests\userRegisterRequest;
use Auth;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {

        return view('user.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'proname' => 'required|min:3|max:255',
            'prophone' => 'required|integer|min:1',
            'proemail' => 'required|max:255|email',

        ]);
        $user = User::find($id);
        $user->name = $request->proname;
        $user->phone = $request->prophone;
        $user->email = $request->proemail;
        $user->day = $request->proday;
        $user->save();
        alert()->success('ok', "Ma'lumotlaringiz tahrilandi");

        return back();
    }


}
