<?php

namespace App\Http\Controllers;

use App\City;
use App\Http\Requests\CityRequest;
use Illuminate\Http\Request;

class CityController extends Controller
{

    public function index()

    {
        $cities = City::all();
        return view('admin.city.index', compact('cities'));
    }


    public function create()
    {
        //
    }


    public function store(CityRequest $request)
    {
        $city = new City;

        $name = $request->name;
        $no = $request->no;

        if ($request) {
            $city->no = $no;
            $city->name = $name;
            $city->save();

            alert()->success('SuccessAlert', 'Viloyat Saqladi');
            return redirect()->route('city.index');
        }
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
        $city = City::find($id);
        $name = $request->name;
        $no = $request->no;

        if ($request) {
            $city->no = $no;
            $city->name = $name;
            $city->save();

            alert()->success('SuccessAlert', "Viloyat o'zgartirish Kiritildi");
            return redirect()->route('city.index');
        }
    }


    public function destroy($id)
    {
        //
    }

    public function vil_delete(Request $request)
    {
        $bayiID = $request->id;
        $bayi = City::find($bayiID);
        $bayi->delete();
        return response()->json(['message' => 'ok'], 200);
    }
}
