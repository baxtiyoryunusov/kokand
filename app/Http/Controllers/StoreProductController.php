<?php

namespace App\Http\Controllers;


use App\Favori;
use App\ColorValue;
use App\Variant;
use App\Dayjest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class StoreProductController extends Controller
{



    public function ind()
    {

        $favori = Favori::with('getColor')->where("customer_id", Auth::user()->id)->get();

        return view('favori.index', compact('favori'));
    }

    public function create()
    {
        //
    }


    public function storePOST()
    {


        $cookie_data = stripslashes(Cookie::get('Store'));
        $cart_data = json_decode($cookie_data, true);



        if($cart_data){

            $color = ColorValue::with('getProduct')
                ->with('getColorFirst')
                ->with('getImgNull')
                ->select('product_id')
                ->join('products', 'color_values.product_id', '=', 'products.id')
                ->join('colors', 'color_values.color_id', '=', 'colors.id')
                ->join('brands', 'products.brand_id', '=', 'brands.id')
                ->join('categoris', 'products.category_id', '=', 'categoris.id')
                ->select(
                    'color_values.created_at',
                    'color_values.color_id',
                    'categoris.name as category_name',
                    'brands.name as brand_name',
                    'colors.name as color_name',
                    'color_values.id as id',
                    'products.id as product_id',
                    'products.name as product_name',
                    'products.brand_id as brand_id',
                    'products.slug as products_slug',
                    'products.status as product_status'
                )
                ->whereIn('color_values.id',$cart_data)
                ->where('color_values.status', '=', 1)->get();
            return response()->json(['message' => 'ok', 'status' => $color], 200);

        }else{
            $cart_data=[];
            return response()->json(['message' => 'ok', 'status' => $cart_data], 200);
        }





    }




    public function storeGet(Request $request)
    {





        $color_value_id = $request->color_value_id;

        if (Cookie::get('Store')) {
            $cookie_data = stripslashes(Cookie::get('Store'));
            $color_value_id_data = json_decode($cookie_data, true);
        } else {
            $color_value_id_data = array();
        }

        $color_value_id_list = array_column($color_value_id_data, 'color_value_id');
        $color_value_id_is_there = $color_value_id;

        if (in_array($color_value_id_is_there, $color_value_id_list)) {
            foreach ($color_value_id_data as $keys => $values) {
                if ($color_value_id_data[$keys]["color_value_id"] == $color_value_id) {


                        $item_data = json_encode($color_value_id_data);
                        $minutes = 9999;
                        Cookie::queue(Cookie::make('Store', $item_data, $minutes));


                    $cookie_data = stripslashes(Cookie::get('Store'));
                    $cart_data = json_decode($cookie_data, true);



                    if($cart_data){



                        return response()->json(['message' => 'ok', 'status' => 200], 200);
                    }else{
                        $cart_data=[];
                        return response()->json(['message' => 'ok', 'status' => $cart_data], 200);


                    }



                }
            }
        }
        else {


            $item_array = array(
                'color_value_id' => $color_value_id,
            );
            $color_value_id_data[] = $item_array;

            $item_data = json_encode($color_value_id_data);
            $minutes = 9999;
            Cookie::queue(Cookie::make('Store', $item_data, $minutes));
            $cart_data = json_decode($cookie_data, true);



            if($cart_data){



                return response()->json(['message' => 'ok', 'status' => 200], 200);
            }else{
                $cart_data=[];


                return response()->json(['message' => 'ok', 'status' => $cart_data], 200);


            }

        }


    }
    public function store(Request $request)
    {



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

    }




}
