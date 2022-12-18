<?php

namespace App\Http\Controllers;

use App\Bayi;
use App\Shahar;
use Illuminate\Http\Request;

class ShaharController extends Controller
{

    public function index()
    {

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $city = new Shahar;

        $name = $request->name;
        $no = $request->no;

        if ($request) {
            $city->no = $no;
            $city->name = $name;
            $city->save();

            alert()->success('SuccessAlert', 'Shahar Saqladi');
            return redirect()->route('shahar.index');
        }
    }


    public function show($id)
    {
        $cities = Shahar::find($id);
        return view('admin.shahar.index', compact('cities'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $city = Shahar::find($id);
        $name = $request->name;
        $no = $request->no;

        if ($request) {
            $city->no = $no;
            $city->name = $name;
            $city->save();

            alert()->success('SuccessAlert', "Shahar o'zgartirish Kiritildi");
            return redirect()->route('shahar.index');
        }
    }


    public function destroy($id)
    {
        //
    }

    public function vil_delete(Request $request)
    {
        $bayiID = $request->id;
        $bayi = Shahar::find($bayiID)->first();
        $bayi->delete();
        return response()->json(['message' => 'ok'], 200);
    }

}
