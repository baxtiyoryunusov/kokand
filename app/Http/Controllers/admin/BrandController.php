<?php

namespace App\Http\Controllers\admin;
use App\brands;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function index()
    {
        return view('newadmin.brand.index');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'slug' => 'required|min:3|max:255',
            'name' => 'required|min:3|max:255',
            'img' => 'required|max:255',
        ]);

        $brand = new brands;
        if ($request->hasFile('img')) {
            $imageOne = $request->file('img');
            $filename = 'Brend' . '-' . time() . '.' . $imageOne->getClientOriginalExtension();
            $location = public_path('../public_html/brend/');
            $imageOne->move($location, $filename);
            $brand->img = 'brend/'.$filename;
        }
        $brand->name=$request->name;
        $brand->slug=$request->slug;
        $brand->save();
        alert()->success("ok", "Brand saqlandi");
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
}
