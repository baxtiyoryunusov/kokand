<?php

namespace App\Repositories;

use App\ProductXususiyatValue;
use http\Env\Request;

class ProductXususiyatValueRepository
{
    public function store($request)
    {
        $this->vali($request);
        $control = $this->control($request);
        if ($control) {


            alert()->warning("Eslatma", "Mavjud Xususiyat saqlandimadi");

        } else {
            $ProductXususiyatValue = new ProductXususiyatValue;
            $ProductXususiyatValue->product_id = $request->product_id;
            $ProductXususiyatValue->xususiyat_id = $request->xususiyat_id;
            $ProductXususiyatValue->save();
            alert()->success("SuccessAlert", "Xususiyat saqlandi");
            return back();
        }


        return $product = ProductXususiyatValue::with('getKat')->get();
    }
    public function getWhereColum($colum,$req)
    {
        return ProductXususiyatValue::where($colum, $req)->get();;
    }

    public function control($control, $request)
    {

        return $control = ProductXususiyatValue::where('product_id', $request->product_id)->where('xususiyat_id', $request->xususiyat_id)->first();


    }
    public function vali($request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'yangi_price' => 'required|min:3',
        ]);
    }
}
