<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\XususiyatValue;

class XususiyatValueController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'xususiyat_val' => 'required|min:2|max:255',
        ]);
        $xususiyatValue = new XususiyatValue;
        $xususiyatValue->name=$request->xususiyat_val;
        $xususiyatValue->xususiyat_id=$request->xususiyat_id;
        $xususiyatValue->save();
        alert()->success("SuccessAlert", "Xususiyat Qiymati saqlandi");
        return back();

    }


    public function xusuiyatValueDelete(Request $request)

    {

        $menu = XususiyatValue::where('id', $request->ir)->first();
        $menu->delete();

        return response()->json(['message' => 'ok'], 200);

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
