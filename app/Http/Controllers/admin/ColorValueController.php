<?php

namespace App\Http\Controllers\admin;

use App\Color;
use App\ColorValue;
use App\Http\Controllers\Controller;
use App\productImg;
use App\ProductXususiyatValue;
use App\Variant;
use App\Xususiyat;
use Illuminate\Http\Request;

class ColorValueController extends Controller
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
            'color_id' => 'required|min:1|max:255',
        ]);
        $control = ColorValue::where('product_id', $request->product_id)->where('color_id', $request->color)->first();
        if ($control) {
            alert()->warning("Eslatma", "Rang saqlandi  Mavjud  Rang");
            return back();
        } else {
            $ColorValue = new ColorValue;
            $ColorValue->color_id = $request->color_id;
            $ColorValue->product_id = $request->product_id;

            $ColorValue->save();
            alert()->success("SuccessAlert", "Rang saqlandi");
            return back();
        }
    }

    public function AddVariantDropzon(Request $request)
    {

        $ColorValue = ColorValue::with('getProduct')->where('id', $request->id)->first();

        foreach ($request->file as $id) {
            $img = new productImg;
            $imageOne = $id;
            $filename = 'productone' . '-' . time() . '.' . $imageOne->getClientOriginalName();
            $location = public_path('../public_html/eliteKokand/');
            $imageOne->move($location, $filename);
            $img->img = 'eliteKokand/' . $filename;
            $img->name = $ColorValue->getProduct->name;
            $img->color_values_id = $ColorValue->id;
            $img->order = 0;
            $img->save();


        }
        foreach ($request->variant_id as $key => $order) {
            foreach ($order as $xususiyat_id => $xususiyat_value_id) {
                if ($xususiyat_value_id != '') {
                    $ProductXususiyatValue = new ProductXususiyatValue;
                    $ProductXususiyatValue->xususiyats_id = $xususiyat_id;
                    $ProductXususiyatValue->xususiyat_value_id = $xususiyat_value_id;
                    $ProductXususiyatValue->color_values_id = $ColorValue->id;
                    $ProductXususiyatValue->save();
                }

            }
        }
        $imgajx = productImg::where('color_values_id', $ColorValue->id)->get();
        return response()->json(['message' => 'ok', 'imgajx' => $imgajx], 200);


    }


    public function getColorvariantCerateProduct(Request $request, $id)
    {
        $ColorValue = ColorValue::with('getColorFirst')->with('getProduct')->with('getColorVariantValue')->where('id', $request->id)->first();
        $xususiyatAll = Xususiyat::with('getXususiyatValue')->get();
        $variantAll = Variant::all();
        return view('newadmin.colorvariantadd.index', compact('ColorValue', 'xususiyatAll', 'variantAll'));
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

    public function colorValueDelete(Request $request)

    {

        $menu = ColorValue::where('id', $request->ir)->first();
        $menu->delete();

        return response()->json(['message' => 'ok'], 200);

    }

    public function getColorValueUpdate(Request $request)
    {
        $colorvalue = ColorValue::where('id', $request->ir)->first();
        $color = Color::where('id', $colorvalue->color_id)->first();
        return response()->json(['color' => $color, 'colorvalue' => $colorvalue], 200);

    }

    public function postColorValueUpdate(Request $request)
    {
        $colorvalue = ColorValue::where('id', $request->product_id)->first();

        $colorvalue->color_id = $request->colorid;
        $colorvalue->save();
        return back();

    }
    public function status(Request $request)
    {
        try {

            $menuID = $request->id;
            $menu = ColorValue::find($menuID);
            $status = $menu->status;
            $menu->status = $status ? 0 : 1;
            $menu->save();
            return response()->json(['message' => 'ok', 'status' => $menu->status], 200);
        } catch (\Exception $exception) {
            return response()->json(['message' => 'basarsiz', 'status' => $status], 500);
        }

    }
}
