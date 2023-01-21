<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index()

    {
        $customers = User::orderBY('id', 'desc')->get();
        return view('newadmin.customer.index', compact('customers'));
    }


    public function create()
    {

        return view('newadmin.customer.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'familya' => 'required|min:3',
            'reg_email' => 'required|email|unique:customers,email',
            'reg_password' => 'required|min:4',
            'confirm' => 'required_with:reg_password|same:reg_password|min:4'
        ]);

        $user = new Admin;
        $user->name = $request->name;
        $user->familya = $request->familya;
        $user->password = bcrypt($request->reg_password);

        $user->email = $request->reg_email;
        $user->status = $request->status ? 1 : 0;
        $control = User::where('email', $request->reg_email)->first();
        if ($control) {
            alert()->warnig("error", "Bu Admin  mavjud");
            return back();
        } else {
            $user->save();
            alert()->success("ok", "Saqlandi");
            return redirect()->route('usersadmin.index');
        }


    }


    public function show($id)
    {
        $user = User::find($id);
        return view('newadmin.customer.show', compact('user'));
    }


    public function edit($id)
    {
        $customer = User::find($id);
        return view('newadmin.customer.edit', compact('customer'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'familya' => 'required|min:3',
            'reg_email' => 'required|email',

        ]);

        $user = User::where('id', $id)->first();
        $user->name = $request->name;
        $user->familya = $request->familya;
        $user->password = bcrypt($request->reg_password);

        $user->email = $request->reg_email;
        $user->status = $request->status ? 1 : 0;
        $control = User::where('email', $request->reg_email)->where('id', '!=', $id)->first();
        if ($control) {
            alert()->warnig("error", "Bu Admin  mavjud");
            return back();
        } else {
            $user->save();
            alert()->success("ok", "Saqlandi");
            return redirect()->route('usersadmin.index');
        }
    }

    public function usersadmiPass(Request $request, $id)
    {
        $request->validate([

            'reg_password' => 'required|min:4',
            'confirm' => 'required_with:reg_password|same:reg_password|min:4'
        ]);

        $user = User::where('id', $id)->first();

        $user->password = bcrypt($request->reg_password);


        $user->save();
        alert()->success("ok", "Saqlandi");
        return redirect()->route('usersadmin.index');

    }

    public function status(Request $request)
    {
        try {
            $menuID = $request->id;
            $menu = User::find($menuID);
            $status = $menu->status;
            $menu->status = $status ? 0 : 1;
            $menu->save();
            return response()->json(['message' => 'ok', 'status' => $menu->status], 200);
        } catch (\Exception $exception) {
            return response()->json(['message' => 'basarsiz', 'status' => $status], 500);
        }

    }

    public function trash(Request $request)
    {
        $menu = User::where('id', $request->ir)->first();
        $menu->delete();

        return response()->json(['message' => 'ok'], 200);
    }
}
