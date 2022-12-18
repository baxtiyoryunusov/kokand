<?php

namespace App\Http\Controllers;


use App\Favori;
use App\ColorValue;
use App\Variant;
use App\ProductVariantValue;
use App\Dayjest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class FavoriController extends Controller
{

    private $ColorArr = array();
    private $ProductArr = array();
    private $QtyArr = array();

    public function index()
    {

        $favori = Favori::with('getColor')->where("customer_id", Auth::user()->id)->get();

        return view('favori.index', compact('favori'));
    }

    public function create()
    {
        //
    }
    public function Addcartdelete(Request $request)
    {
        $variant = $request->input('variant');
        $colorid = $request->input('colorid');
        $varia = Variant::where('name',$variant)->first();





        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);

            $item_id_list = array_column($cart_data, 'item_id');
            $prod_id_is_there = $colorid;
            $item_id_listvar = array_column($cart_data, 'item_variant_id');
            $prod_id_is_therevar = $varia->id;

            if(in_array($prod_id_is_there, $item_id_list) and in_array($prod_id_is_therevar, $item_id_listvar))
            {
                foreach($cart_data as $keys => $values)
                {
                    if($cart_data[$keys]["item_id"] == $colorid and $cart_data[$keys]["item_variant_id"] == $varia->id)
                    {

                        unset($cart_data[$keys]);
                        $item_data = json_encode($cart_data);
                        $minutes = 60;
                        Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                        return response()->json(['status'=>'Item Removed from Cart']);
                    }
                }
            }
        }





    }

    public function updatetocart(Request $request)
    {
        $variant = $request->input('variant');
        $quantity = $request->input('quantity');
        $colorid = $request->input('colorid');
        $varia = Variant::where('name',$variant)->first();

        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);

            $item_id_list = array_column($cart_data, 'item_id');
            $prod_id_is_there = $colorid;
            $item_id_listvar = array_column($cart_data, 'item_variant_id');
            $prod_id_is_therevar = $varia->id;

            if(in_array($prod_id_is_there, $item_id_list) and in_array($prod_id_is_therevar, $item_id_listvar))
            {
                foreach($cart_data as $keys => $values)
                {
                    if($cart_data[$keys]["item_id"] == $colorid and $cart_data[$keys]["item_variant_id"] == $varia->id)
                    {


                        $controlvariant=ProductVariantValue::where('color_values_id',$cart_data[$keys]["item_id"])->where('variant_id',$cart_data[$keys]["item_variant_id"])->first();
                        if ($quantity <= $controlvariant->qty){
                            $cart_data[$keys]["item_quantity"] =  $quantity;
                            $item_data = json_encode($cart_data);
                            $minutes = 60;
                            Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                            return response()->json(['status'=>'"'.$cart_data[$keys]["item_name"].'" Quantity Updated'],200);
                        }else{
                            return response()->json(['warning'=>'Miqdor  yetari  emas','qty'=>$controlvariant->qty] ,200);
                        }

                    }
                }
            }
        }
    }

    public function cardcooke()
    {


        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);

        /*foreach ($cart_data as $item){
            $this->ColorArr[]=$item['item_id'];
            $this->ProductArr[]=$item['item_product_id'];
            $this->QtyArr[]=$item['item_quantity'];
        }
        dd($this->ColorArr);*/

        if($cart_data){
            return view('cookeindex')
                ->with('cart_data', $cart_data);
        }else{
            $cart_data=[];
            return view('cookeindex')
                ->with('cart_data', $cart_data);
        }





    }

    public function addcooke(Request $request)
    {


        $color = ColorValue::with('getProduct')->where('id', $request->colorId)->first();
        $variant = Variant::find($request->variantId);

        $prod_id = $color->product_id;
        $quantity = $request->qty;

        if (Cookie::get('shopping_cart')) {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
        } else {
            $cart_data = array();
        }

        $item_id_list = array_column($cart_data, 'item_id');
        $prod_id_is_there = $color->id;

        if (in_array($prod_id_is_there, $item_id_list)) {
            foreach ($cart_data as $keys => $values) {
                if ($cart_data[$keys]["item_id"] == $color->id) {
                    if ($cart_data[$keys]["item_variant_id"] == $request->variantId) {
                        $cart_data[$keys]["item_quantity"] = $quantity;
                        $item_data = json_encode($cart_data);
                        $minutes = 60;
                        Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                        return response()->json(['message' => 'ok', 'status' => 'Tahrirlandi'], 200);
                    } else {
                        $item_array = array(
                            'item_id' => $color->id,
                            'item_product_id' => $prod_id,
                            'item_slug' => $color->getProduct->slug,
                            'item_price' => $color->getProduct->yangi_price,
                            'item_quantity' => $quantity,
                            'item_variant_id' => $request->variantId,
                            'item_name' => $color->getProduct->name,
                            'item_variant_name' => $variant->name,
                            'item_image' => $color->getImgNull->img,


                        );
                        $cart_data[] = $item_array;

                        $item_data = json_encode($cart_data);
                        $minutes = 60;
                        Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                        return response()->json(['message' => 'ok', 'status' => 'saqladı'], 200);

                    }

                }
            }
        }
        else {


            $item_array = array(
                'item_id' => $color->id,
                'item_product_id' => $prod_id,
                'item_price' => $color->getProduct->yangi_price,
                'item_quantity' => $quantity,
                'item_variant_id' => $request->variantId,
                'item_slug' => $color->getProduct->slug,
                'item_image' => $color->getImgNull->img,
                'item_name' => $color->getProduct->name,
                'item_variant_name' => $variant->name,


            );
            $cart_data[] = $item_array;

            $item_data = json_encode($cart_data);
            $minutes = 60;
            Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
            return response()->json(['message' => 'ok', 'status' => 'saqladı'], 200);

        }
        /* if (Cookie::get('shopping_card')) {

             $cooke_dat = Cookie::get('shopping_card');
             $card_data = json_decode($cooke_dat, true);
         } else {
             $card_data = array();
         }


         $item_id_list = array_column($card_data, 'id');

         if (in_array($request->id, $item_id_list)) {
             foreach ($card_data as $key => $item) {
                 if ($card_data[$key]['id'] == $request->id) {
                     $card_data[$key]['qty'] = $request->qty;
                     $item_data = json_encode($card_data);
                     $minutes = 60;
                     Cookie::queue(Cookie::make('shopping_card', $item_data, $minutes));
                     alert()->success("ok", "dd");
                     return back();
                 }
             }

         } else {
             $cooke = array(
                 'id' => $request->id,
                 'qty' => $request->qty,
                 'name' => $request->name,
                 'price' => $request->price
             );
             $cardCooke[] = $cooke;

             $itemCooke = json_encode($cardCooke);

             $minutes = 60;
             Cookie::queue(Cookie::make('shopping_card', $itemCooke, $minutes));
             alert()->success("ok", "Coooke");
             return back();

         }*/


    }


    public function store(Request $request)
    {

        $favori2 = Favori::where('customer_id', $request->curomerId)->first();
        if ($favori2) {
            $favori3 = Favori::where("customer_id", $request->curomerId)->where("color_values_id", $request->colorId)->first();
            if ($favori3) {
                $status = 3;
            } else {
                $status = 2;
                $favori = new Favori;
                $favori->customer_id = $request->curomerId;
                $favori->color_values_id = $request->colorId;
                $favori->save();
                return response()->json(['message' => 'ok', 'status' => $status], 200);
            }

        } else {
            $status = 0;
            $favori = new Favori;
            $favori->customer_id = $request->curomerId;
            $favori->color_values_id = $request->colorId;
            $favori->save();
            return response()->json(['message' => 'ok', 'status' => $status], 200);
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

    }

    public function dayjest(Request $request)
    {
        $request->validate([
            'dayjest' => 'required|email|min:4'
        ]);
        $dayjest = new Dayjest;
        $dayjest->email = $request->dayjest;
        $dayjest->save();
        alert()->success("Ma'lumot", "So'rovingiz qabul qilindi");
        return back();

    }

    public function favoriDestr(Request $request)
    {


        $favori = Favori::where("customer_id", $request->curomerId)->where("color_values_id", $request->colorId)->first();

        if ($favori) {
            $favori->delete();
            $status = 2;
            $favori2 = Favori::where("customer_id", $request->curomerId)->first();
            if ($favori2) {
                $status = 1;
            } else {
                $status = 0;
            }
        } else {
            $status = 3;
        }


        return response()->json(['message' => 'ok', 'status' => $status], 200);

    }
}
