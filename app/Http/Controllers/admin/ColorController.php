<?php

namespace App\Http\Controllers\admin;

use App\Color;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ColorController extends Controller
{

    public function index()
    {
        return view('newadmin.color.index');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:1|max:255',
            'colorkod' => 'required|min:1|max:255',
            'slug' => 'required|min:1|max:255',
            'textkod' => 'required|min:1|max:255',

        ]);
        $variant = new Color;
        $variant->name = $request->name;
        $variant->slug = $request->slug;
        $variant->color_kod = $request->colorkod;
        $variant->text_kod = $request->textkod;
        $variant->save();
        alert()->success("SuccessAlert", "Rang saqlandi");
        return back();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function colorDelete(Request $request)

    {

        $menu = ProductXususiyatValue::where('id', $request->ir)->first();
        $menu->delete();

        return response()->json(['message' => 'ok'], 200);

    }
}
