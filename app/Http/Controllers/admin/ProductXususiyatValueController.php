<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\ProductXususiyatValue;
use App\XususiyatValue;
use App\Xususiyat;

class ProductXususiyatValueController extends Controller
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
        $request->validate([
            'xususiyats_id' => 'required|min:1|max:255',

        ]);
        $control=ProductXususiyatValue::where('color_values_id',$request->color_values_id)->where('xususiyats_id',$request->xususiyats_id)->first();
        if ($control){
            alert()->warning("Eslatma", "Mavjud Xususiyat saqlandimadi");
            return back();
        }else{
            $ProductXususiyatValue = new ProductXususiyatValue;
            $ProductXususiyatValue->color_values_id=$request->color_values_id;
            $ProductXususiyatValue->xususiyats_id=$request->xususiyats_id;
            $ProductXususiyatValue->save();
            alert()->success("SuccessAlert", "Xususiyat saqlandi");
            return back();
        }

    }


    public function show($id)
    {
        $product_id=Product::with('getProductXususiyatValue')->where('id',$id)->first();
        $productxusuxiyatvalue=ProductXususiyatValue::where('product_id',$id)->get();
        $xususiyatAll= Xususiyat::with('getXususiyatValue')->get();
        return view('newadmin.productxusuxiyatvalue.index',compact('productxusuxiyatvalue','xususiyatAll','product_id'));
    }


    public function edit($id)
    {

    }
    public function productxususiyatvalueAdd(Request $request)
    {


        try {
            $color = ProductXususiyatValue::where('id',$request->id)->first();
            $color->xususiyat_value_id = $request->productxususiyatvalue;
            $color->save();
            return response()->json(['message' => 'okd', 'name' => 'ok'], 200);
        } catch (\Exception $exception) {
            return response()->json(['message' => 'basarsiz', 'name' => 'bosh'], 400);
        }
    }

    public function productXusuiyatDelete(Request $request)
    {

        $menu = ProductXususiyatValue::where('xususiyats_id', $request->ir)->first();
        $menu->delete();

        return response()->json(['message' => 'ok'], 200);

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
