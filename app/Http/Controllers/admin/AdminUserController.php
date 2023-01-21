<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class AdminUserController extends Controller
{

    public function index()

    {
        $users = Admin::where('id', '!=', Auth::user()->id)->with('roles')->orderBY('id', 'desc')->get();
        return view('newadmin.admins.index', compact('users'));
    }


    public function create()
    {
        $roles = Role::all();
        return view('newadmin.admins.create', compact('roles'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'familya' => 'required|min:3',
            'reg_email' => 'required|email|unique:admins,email',
            'reg_password' => 'required|min:4',
            'confirm' => 'required_with:reg_password|same:reg_password|min:4'
        ]);

        $admin = new Admin;
        $admin->name = $request->name;
        $admin->familya = $request->familya;
        $admin->password = bcrypt($request->reg_password);
        $admin->syncRoles($request->rol);
        $admin->email = $request->reg_email;
        $admin->status = $request->status ? 1 : 0;
        $control = Admin::where('email', $request->reg_email)->first();
        if ($control) {
            alert()->warnig("error", "Bu Admin  mavjud");
            return back();
        } else {
            $admin->save();
            alert()->success("ok", "Saqlandi");
            return redirect()->route('usersadmin.index');
        }


    }


    public function show($id)
    {
        $user = Admin::find($id);
        return view('newadmin.admins.show', compact('user'));
    }


    public function edit($id)
    {   $roles = Role::all();
        $user = Admin::find($id);
        return view('newadmin.admins.edit', compact('user','roles'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'familya' => 'required|min:3',
            'reg_email' => 'required|email',

        ]);

        $admin = Admin::where('id', $id)->first();
        $admin->name = $request->name;
        $admin->familya = $request->familya;
        $admin->password = bcrypt($request->reg_password);
        $admin->syncRoles($request->rol);
        $admin->email = $request->reg_email;
        $admin->status = $request->status ? 1 : 0;
        $control = Admin::where('email', $request->reg_email)->where('id', '!=', $id)->first();
        if ($control) {
            alert()->warnig("error", "Bu Admin  mavjud");
            return back();
        } else {
            $admin->save();
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

        $admin = Admin::where('id', $id)->first();

        $admin->password = bcrypt($request->reg_password);


        $admin->save();
        alert()->success("ok", "Saqlandi");
        return redirect()->route('usersadmin.index');

    }

    public function status(Request $request)
    {
        try {
            $menuID = $request->id;
            $menu = Admin::find($menuID);
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
        $menu = Admin::where('id', $request->ir)->first();

        $menu->delete();

        return response()->json(['message' => 'ok'], 200);
    }
}
