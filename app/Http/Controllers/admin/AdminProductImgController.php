<?php

namespace App\Http\Controllers\admin;

use App\ColorValue;
use App\Http\Controllers\Controller;
use App\Product;
use App\productImg;
use Illuminate\Http\Request;

class AdminProductImgController extends Controller
{

    /*public function edit($id)
    {
        $img = productImg::where('pro_id', $id)->orderBy('order', 'ASC')->get();
        $product = Product::where('id', $id)->first();
        return view('newadmin.productimg.edit', compact('product', 'img'));
    }*/

    public function sortable(Request $request)
    {
        parse_str($request->id, $order);
        $item = $order['rank'];
        foreach ($item as $key => $id) {
            $pro = productImg::where('id', $id)->first();
            $pro->order = $key;
            $pro->save();
        }
    }

    public function dropzone(Request $request, $id)
    {

        $ColorValue = ColorValue::with('getProduct')->where('id', $request->id)->first();
            $img = new productImg;
            $imageOne = $request->file;
            $filename = 'productone' . '-' . time() . '.' . $imageOne->getClientOriginalName();
            $location = public_path('../public_html/eliteKokand/');
            $imageOne->move($location, $filename);
            $img->img = 'eliteKokand/' . $filename;
            $img->name = $ColorValue->getProduct->name;
            $img->color_values_id = $ColorValue->id;
            $img->order = 0;
            $img->save();
            $imgajx = productImg::where('img', $img->img)->first();
            return response()->json(['message' => 'ok', 'imgajx' => $imgajx], 200);
    }

    public function deleteImg(Request $request)

    {
        foreach ($request->id as $v) {
            $bayi = productImg::where('id', $v)->first();
            $bayi->delete();
        }
        return response()->json(['message' => 'ok'], 200);

    }


    public function create()
    {

    }


    public function show($id)
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


    public function checkStatus(Request $request)
    {
        try {
            $menuID = $request->id;
            $menu = Product::find($menuID);
            $status = $menu->status;
            $menu->status = $status ? 0 : 1;
            $menu->save();
            return response()->json(['message' => 'ok', 'status' => $menu->status], 200);
        } catch (\Exception $exception) {
            return response()->json(['message' => 'basarsiz', 'status' => $status], 500);
        }

    }
}
