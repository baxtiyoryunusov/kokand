<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Variant;
use App\ProductVariantValue;
use Illuminate\Http\Request;

class ProductVariantValueController extends Controller
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
            'v_id' => 'required|min:1|max:255',
            'qty' => 'required|min:1|max:255',
            'variant_sku' => 'required|min:1|max:255',

        ]);
        $control=ProductVariantValue::where('color_values_id',$request->color_id)->where('variant_id',$request->v_id)->first();
        if ($control){
            alert()->warning("Eslatma", "Mavjud Xususiyat saqlandimadi");
            return back();
        }else{
            $ProductXususiyatValue = new ProductVariantValue;
            $ProductXususiyatValue->color_values_id=$request->color_id;
            $ProductXususiyatValue->variant_id=$request->v_id;
            $ProductXususiyatValue->qty=$request->qty;
            $ProductXususiyatValue->sku=$request->variant_sku;
            $ProductXususiyatValue->save();
            alert()->success("SuccessAlert", "Xususiyat saqlandi");
            return back();
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
        //
    }


    public function destroy($id)
    {
        //
    }
}
