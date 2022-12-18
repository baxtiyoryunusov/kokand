<?php

namespace App\Http\Controllers;

use App\brands;
use App\Call;
use App\Category;
use App\mode\Comment\Comment;
use App\Color;
use App\ColorValue;
use App\Product;
use App\productImg;
use App\ProductVariantValue;
use App\ProductXususiyatValue;
use App\Variant;
use App\Xususiyat;
use App\XususiyatValue;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginate;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{


    private $BrendIdUchunArry = array();
    private $BrendproductIdUchunArry = array();
    private $ColorFilterUchunArry = array();
    private $SizeFilterUchunVariantIdArry = array();
    private $ProductVariantValueID = array();
    private $ColorFitreFrontenduchun = array();
    /* color filter frontend uchun SATRT */
    private $SizeFitreFrontenduchun = array();
    private $XusFitreFrontenduchun2 = array();
    private $XusFilterUchunArry = array();
    /* color filter frontend uchun end */
    /* size filter frontend uchun SATRT */
    private $ProductMINMAXFilterArry = array();
    private $SizeFitreFrontenduchun2 = array();
    private $productArr = array();
    /* size filter frontend uchun end */
    private $categotyArr = array();
    private $BrabdCategoryArr = array();
    private $kategoryArry = array();

    public function wow(Request $request, $urll)
    {

        $url = "?";
        /*<---------------------------------------------------------->*/
        /*<---------------------------------------------------------->*/
        $maxpriceget = $request->get('max_price');
        $maxpriceArr3 = str_replace(',', '', $maxpriceget);
        $maxpriceArr2 = str_replace('.', '', $maxpriceArr3);
        $maxpriceArr = str_replace('UZS', '', $maxpriceArr2);


        $minpriceget = $request->get('min_price');
        $minpriceArr3 = str_replace(',', '', $minpriceget);
        $minpriceArr2 = str_replace('.', '', $minpriceArr3);
        $minpriceArr = str_replace('UZS', '', $minpriceArr2);

        /*<---------------------------------------------------------->*/
        /*<---------------------------------------------------------->*/
        $xusget = $request->get('xus');
        $xusreplase = str_replace(',', ' ', $xusget);
        $xusArr = explode(" ", $xusreplase);

        /*<---------------------------------------------------------->*/
        /*<---------------------------------------------------------->*/
        /*filterga  aloqador start*/
        $colorget = $request->get('color');
        $colorreplase = str_replace(',', ' ', $colorget);
        $colorArr = explode(" ", $colorreplase);
        /*filterga  aloqador end*/
        /*<---------------------------------------------------------->*/
        /*<---------------------------------------------------------->*/
        /*<---------------------------------------------------------->*/
        /*<---------------------------------------------------------->*/
        /*filterga  aloqador start*/
        $sizeget = $request->get('size');
        $sizereplase = str_replace(',', ' ', $sizeget);
        $sizeArr = explode(" ", $sizereplase);
        /*filterga  aloqador end*/
        /*<---------------------------------------------------------->*/
        /*<---------------------------------------------------------->*/
        /*<---------------------------------------------------------->*/
        /*filterga  aloqador start*/
        $brandget = $request->get('brand');
        $brandreplase = str_replace(',', ' ', $brandget);
        $brandArr = explode(" ", $brandreplase);
        /*filterga  aloqador end*/

        /*<---------------------------------------------------------->*/
        /*<---------------------------------------------------------->*/

        if ($urll == 'barchasi') {
            $sortDirection = 'DESC';
            $bredpro = Product::with('getColorValueImgFrontend')->where('status', '=', 1)->get();
            foreach ($bredpro as $item) {
                $this->BrendIdUchunArry[] = $item->brand_id;
            }
            $product = Product::with('getColorValueImgFrontend')->where('status', '=', 1);
            $color = ColorValue::with('getProduct')
                ->with('getColorFirst')
                ->select('product_id')
                ->join('products', 'color_values.product_id', '=', 'products.id')
                ->join('colors', 'color_values.color_id', '=', 'colors.id')
                ->join('brands', 'products.brand_id', '=', 'brands.id')
                ->join('categoris', 'products.category_id', '=', 'categoris.id')
                ->select('color_values.created_at', 'color_values.color_id', 'categoris.name as category_name', 'brands.name as brand_name', 'colors.name as color_name', 'color_values.id as id', 'products.id as product_id', 'products.name as product_name', 'products.brand_id as brand_id', 'products.status as product_status')
                ->where('color_values.status', '=', 1);
            if (count($brandArr) > 1) {
                $brandFiltreichi = brands::whereIn('slug', $brandArr)->get();
                foreach ($brandFiltreichi as $item) {
                    $this->BrendproductIdUchunArry[] = $item->id;
                }
                $product = $product->whereIn('brand_id', $this->BrendproductIdUchunArry);
                $url .= "&brand=" . $brandget;
                $b = $this->BrendproductIdUchunArry;
                $color->whereIn("products.brand_id", $b);
                $product = $product->get();
                foreach ($product as $itempro) {
                    $this->BrabdCategoryArr[] = $itempro->category_id;
                }
               /* $kategoryAll = Category::with('getChildren')->orderBy('order', 'ASC')->where('status', true)->whereIn('id', $this->BrabdCategoryArr)->get();*/

                $kate = Category::with('getChildren')->where('status', true)->whereIn('id', $this->BrabdCategoryArr)->get();
                foreach($kate as $item){
                    $kategoryArry[] = CategoryController::getParentsFirst($item , $item->id);
                }
                $kategoryAll = Category::with('getChildren')->orderBy('order', 'ASC')->whereIn('id', $kategoryArry)->get();

            } else {
                $product = $product->get();

                $kategoryAll = Category::with('getChildren')->orderBy('order', 'ASC')->where('status', true)->where('p_id', Null)->get();

            }
            if ($request->get('keyword') != '') {
                $keyword = trim($request->get('keyword'));
                $color->whereRaw("concat(products.name, ' ',colors.name,' ',products.yangi_price,' ',brands.name,' ',categoris.name) like ?", "%" . $keyword . "%");
                $url .= "&keyword=" . $request->get('keyword');


            }


            foreach ($product as $item) {
                $this->BrendIdUchunArry[] = $item->brand_id;
                $this->ProductMINMAXFilterArry[] = $item->id;
            }
            $productMaxFilter = Product::orderBY('yangi_price', 'DESC')->where('status', '=', 1)->whereIn('id', $this->ProductMINMAXFilterArry)->first();
            $productMinFilter = Product::orderBY('yangi_price')->where('status', '=', 1)->whereIn('id', $this->ProductMINMAXFilterArry)->first();
            if ($product) {
                foreach ($product as $productitem) {
                    $this->col($productitem);
                }
            } else {
                return back();
            }
            $color->whereIn('color_values.id', $this->productArr);
            $colorFilterFrontendGet = ColorValue::where('status', '=', 1)->whereIn('id', $this->productArr)->get();
            foreach ($colorFilterFrontendGet as $item) {
                $this->ColorFitreFrontenduchun[] = $item->color_id;
                $this->SizeFitreFrontenduchun[] = $item->id;
            }
            $colorFilter = Color::orderBy('name')->whereIn('id', $this->ColorFitreFrontenduchun)->get();
            $brandFilter = brands::orderBy('name')->whereIn('id', $this->BrendIdUchunArry)->get();
            /* color filter frontend uchun end */
            /* Size filter frontend uchun START */
            $SizeFilterFrontendGet = ProductVariantValue::whereIn('color_values_id', $this->SizeFitreFrontenduchun)->get();
            foreach ($SizeFilterFrontendGet as $item) {
                $this->SizeFitreFrontenduchun2[] = $item->variant_id;
            }
            $XususiyatFrontendGet = ProductXususiyatValue::whereIn('color_values_id', $this->SizeFitreFrontenduchun)->get();
            foreach ($XususiyatFrontendGet as $item) {
                $this->XusFitreFrontenduchun2[] = $item->xususiyats_id;
            }
            $xusFilter = Xususiyat::orderBy('name')->with('getXususiyatValue')->where('id', '!=', 9)->whereIn('id', $this->XusFitreFrontenduchun2)->get();
            $sizeFilter = Variant::orderBy('name')->whereIn('id', $this->SizeFitreFrontenduchun2)->where('id', '!=', 20)->get();
            if ($request->get('sort') != '' and $request->get('order') != '') {
                $sortDirection = trim($request->get('order'));
                if ($request->get('sort') == 'price') {
                    if ($sortDirection == 'DESC' or $sortDirection == 'ASC') {
                        $color->orderBy('products.yangi_price', $sortDirection);
                    }
                }
            }
            if ($request->get('sort') != '') {
                if ($request->get('sort') == 'date_added') {
                    $color->orderBy('color_values.updated_at', 'DESC');
                }
            }
            if (count($xusArr) > 1) {
                $FiltreichiXus = ProductXususiyatValue::whereIn('xususiyat_value_id', $xusArr)->get();
                foreach ($FiltreichiXus as $item) {
                    $this->XusFilterUchunArry[] = $item->color_values_id;
                }
                $url .= "&xus=" . $xusget;
                $color->whereIn('color_values.id', $this->XusFilterUchunArry);
            }
            if (count($colorArr) > 1) {
                $colorFiltreichiColor = Color::whereIn('slug', $colorArr)->get();
                foreach ($colorFiltreichiColor as $item) {
                    $this->ColorFilterUchunArry[] = $item->id;
                }
                $url .= "&color=" . $colorget;
                $color->whereIn('color_values.color_id', $this->ColorFilterUchunArry);
            }
            if (count($sizeArr) > 1) {
                $sizeFiltreichiVariant = Variant::whereIn('slug', $sizeArr)->get();
                foreach ($sizeFiltreichiVariant as $item) {
                    $this->SizeFilterUchunVariantIdArry[] = $item->id;
                }
                $url .= "&size=" . $sizeget;
                $ProductVariantValue = ProductVariantValue::whereIn('variant_id', $this->SizeFilterUchunVariantIdArry)->get();
                foreach ($ProductVariantValue as $item) {
                    $this->ProductVariantValueID[] = $item->color_values_id;
                }
                $color->whereIn('color_values.id', $this->ProductVariantValueID);
            }
            $color->whereIn('color_values.id', $this->productArr)->get();

            if ($minpriceArr != '') {
                $min = trim($minpriceArr);
                $color->where('products.yangi_price', '>=', $min);
                $url .= "&min_price=" . $minpriceget;
            }
            if ($maxpriceArr != '') {
                $max = trim($maxpriceArr);
                $color->where('products.yangi_price', '<=', $max);
                $url .= "&max_price=" . $maxpriceget;
            }
            if ($request->get('keyword') != '') {
                $keyword = trim($request->get('keyword'));
                $color->whereRaw("concat(products.name, ' ',colors.name,' ',products.yangi_price,' ',brands.name,' ',categoris.name) like ?", "%" . $keyword . "%");
                $url .= "&keyword=" . $request->get('keyword');
            }
            $color = $color->with('getFavori')->orderBy('color_values.updated_at', 'DESC')->paginate(12);
            $silder = Product::with('getKat')->where('status', '=', 1)->inRandomOrder()->get();
            return view('welcomecolor', compact('color', 'silder', "url", "productMaxFilter", "productMinFilter", 'xusFilter', 'colorFilter', 'sizeFilter', 'brandFilter', 'kategoryAll'));

        } else if ($urll) {
            $kategoryAll = false;
            $kategory = Category::with('getChildren')->orderBy('order', 'ASC')->where('status', '=', 1)->where('slug', $urll)->first();
            if ($kategory) {
                $this->rec($kategory);
            } else {
                return back();
            }
            $product = Product::with('getColorValueImgFrontend')->where('status', '=', 1)->whereIn('category_id', $this->categotyArr);
            $productmaxfilterUcun = Product::with('getColorValueImgFrontend')->where('status', '=', 1)->whereIn('category_id', $this->categotyArr)->get();
            $product = $product->get();
            foreach ($product as $item) {
                $this->BrendIdUchunArry[] = $item->brand_id;
                $this->ProductMINMAXFilterArry[] = $item->id;
            }
            foreach ($productmaxfilterUcun as $item) {
                $this->ProductMINMAXFilterArry[] = $item->id;
            }
            if ($product) {
                foreach ($product as $productitem) {
                    $this->col($productitem);
                }

            } else {
                return back();
            }
            $productMaxFilter = Product::orderBY('yangi_price', 'DESC')->where('status', '=', 1)->whereIn('id', $this->ProductMINMAXFilterArry)->first();
            $productMinFilter = Product::orderBY('yangi_price')->where('status', '=', 1)->whereIn('id', $this->ProductMINMAXFilterArry)->first();

            $colorFilterFrontendGet = ColorValue::where('status', '=', 1)->whereIn('id', $this->productArr)->get();
            foreach ($colorFilterFrontendGet as $item) {
                $this->ColorFitreFrontenduchun[] = $item->color_id;
                $this->SizeFitreFrontenduchun[] = $item->id;

            }
            $colorFilter = Color::orderBy('name')->whereIn('id', $this->ColorFitreFrontenduchun)->get();
            $brandFilter = brands::orderBy('name')->whereIn('id', $this->BrendIdUchunArry)->get();
            $SizeFilterFrontendGet = ProductVariantValue::whereIn('color_values_id', $this->SizeFitreFrontenduchun)->get();
            foreach ($SizeFilterFrontendGet as $item) {
                $this->SizeFitreFrontenduchun2[] = $item->variant_id;
            }
            $XususiyatFrontendGet = ProductXususiyatValue::whereIn('color_values_id', $this->SizeFitreFrontenduchun)->get();
            foreach ($XususiyatFrontendGet as $item) {
                $this->XusFitreFrontenduchun2[] = $item->xususiyats_id;
            }
            $xusFilter = Xususiyat::orderBy('name')->with('getXususiyatValue')->where('id', '!=', 9)->whereIn('id', $this->XusFitreFrontenduchun2)->get();
            $sizeFilter = Variant::whereIn('id', $this->SizeFitreFrontenduchun2)->where('id', '!=', 20)->get();
            $color = ColorValue::with('getProduct')
                ->with('getColorFirst')
                ->select('product_id')
                ->join('products', 'color_values.product_id', '=', 'products.id')
                ->join('colors', 'color_values.color_id', '=', 'colors.id')
                ->join('brands', 'products.brand_id', '=', 'brands.id')
                ->join('categoris', 'products.category_id', '=', 'categoris.id')
                ->select('color_values.created_at', 'categoris.name as category_name', 'color_values.color_id', 'brands.name as brand_name', 'colors.name as color_name', 'color_values.id as id', 'products.id as product_id', 'products.name as product_name', 'products.brand_id as brand_id', 'products.status as product_status')
                ->where('color_values.status', '=', 1)
                ->whereIn('color_values.id', $this->productArr);

            if ($request->get('sort') != '' and $request->get('order') != '') {
                $sortDirection = trim($request->get('order'));
                if ($request->get('sort') == 'price') {
                    if ($sortDirection == 'DESC' or $sortDirection == 'ASC') {
                        $color->orderBy('products.yangi_price', $sortDirection);
                    }

                }
            }
            if ($request->get('sort') != '') {
                if ($request->get('sort') == 'date_added') {
                    $color->orderBy('color_values.updated_at', 'DESC');
                }
            }
            if (count($xusArr) > 1) {
                $FiltreichiXus = ProductXususiyatValue::whereIn('xususiyat_value_id', $xusArr)->get();
                foreach ($FiltreichiXus as $item) {

                    $this->XusFilterUchunArry[] = $item->color_values_id;
                }
                $url .= "&xus=" . $xusget;
                $color->whereIn('color_values.id', $this->XusFilterUchunArry);
            }
            if (count($brandArr) > 1) {
                $brandFiltreichiColor = brands::whereIn('slug', $brandArr)->get();
                foreach ($brandFiltreichiColor as $item) {
                    $this->BrendproductIdUchunArry[] = $item->id;
                }
                $url .= "&brand=" . $brandget;
                $b = $this->BrendproductIdUchunArry;
                $color->whereIn("products.brand_id", $b);
            }
            if (count($colorArr) > 1) {
                $colorFiltreichiColor = Color::whereIn('slug', $colorArr)->get();
                foreach ($colorFiltreichiColor as $item) {
                    $this->ColorFilterUchunArry[] = $item->id;
                }
                $url .= "&color=" . $colorget;
                $color->whereIn('color_values.color_id', $this->ColorFilterUchunArry);
            }
            if (count($sizeArr) > 1) {
                $sizeFiltreichiVariant = Variant::whereIn('slug', $sizeArr)->get();
                foreach ($sizeFiltreichiVariant as $item) {
                    $this->SizeFilterUchunVariantIdArry[] = $item->id;
                }
                $ProductVariantValue = ProductVariantValue::whereIn('variant_id', $this->SizeFilterUchunVariantIdArry)->get();
                foreach ($ProductVariantValue as $item) {
                    $this->ProductVariantValueID[] = $item->color_values_id;
                }
                $url .= "&size=" . $sizeget;
                $color->whereIn('color_values.id', $this->ProductVariantValueID);
            }
            if ($minpriceArr != '') {
                $min = trim($minpriceArr);
                $color->where('products.yangi_price', '>=', $min);
                $url .= "&min_price=" . $minpriceget;
            }

            if ($maxpriceArr != '') {
                $max = trim($maxpriceArr);
                $color->where('products.yangi_price', '<=', $max);
                $url .= "&max_price=" . $maxpriceget;

            }
            if ($request->get('keyword') != '') {
                $keyword = trim($request->get('keyword'));
                $color->whereRaw("concat(products.name, ' ',colors.name,' ',products.yangi_price,' ',brands.name,' ',categoris.name) like ?", "%" . $keyword . "%");
                $url .= "&keyword=" . $request->get('keyword');

            }
            $color = $color->with('getFavori')->orderbY('color_values.updated_at', 'DESC')->paginate(12);
            $silder = Product::with('getKat')->where('status', '=', 1)->whereIn('category_id', $this->categotyArr)->get();
            return view('welcomecolor', compact('color', "silder", "productMaxFilter", "productMinFilter", "xusFilter", "brandFilter", "brandFilter", "colorFilter", "sizeFilter", "url", 'kategory', 'kategoryAll'));

        }
    }

    public function col($product)
    {

        if ($product->getColorValueImgFrontend) {
            foreach ($product->getColorValueImgFrontend as $item) {
                if ($item->product_id == $product->id) {
                    $this->productArr[] = $item->id;
                    $this->col($item);
                }
            }
        }
    }

    public function rec($kategory)
    {
        $this->categotyArr[] = $kategory->id;
        if ($kategory->getChildren) {
            foreach ($kategory->getChildren as $item) {
                $this->rec($item);
            }
        }

    }


    public function card($slug, $id)
    {

        $pro = Product::with('getColorValueImgFrontend')->where('status', true)->where('slug', $slug)->first();
        if ($pro) {
            $ColorValue = ColorValue::with('getImg')->where('status', true)->with('getColorXususiyatValue')->with('getColorVariantValue')->where('id', $id)->first();
            $comment = Comment::orderBy('id','DESC')->with('getUser')->where('color_value_id',$id)->get();
            if ($ColorValue) {
                return view('card', compact('pro', 'ColorValue','comment'));
            } else {

                return back();
            }
        } else {
            return back();
        }


    }


    public function home(Request $request)
    {
        $silder = Product::with('getColorValueImgFrontend')->with('getKat')->where('status', '=', 1)->inRandomOrder()->get();
        return view('home', compact("silder"));
    }


    public function fastView(Request $request)

    {

        $pro = Product::where('status', true)->with('getColorValueImgFrontend')->where('id', $request->id)->firstOrFail();
        if ($pro) {
            $ColorValue = ColorValue::with('getImg')->with('getColorXususiyatValue')->with('getColorVariantValue')->where('status', true)->where('id', $request->color)->firstOrFail();
            if ($ColorValue->product_id) {

                return view('fastview', compact('pro', 'ColorValue'));
            } else {

                return back();
            }
        } else {

            return back();
        }


    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function call(Request $request)
    {
        $request->validate([
            'fullname' => 'required|min:4',
            'phone' => 'required|integer|min:7'
        ]);
        $call = new Call;
        $call->fullname = $request->fullname;
        $call->phone = $request->phone;
        $call->save();
        alert()->success("Ma'lumot", "So'rovingiz qabul qilindi");
        return back();
    }


    public function destroy($id)
    {
        //
    }

    public function dark()
    {
        if (Cookie::get('dark')){
            Cookie::queue(Cookie::forget('dark'));
            return response()->json(['status'=>0]);
        }else{
            $item_array = array(
                'dark_status' =>1,

            );
            $cart_data[] = $item_array;

            $item_data = json_encode($cart_data);
            $minutes = 1160;
            Cookie::queue(Cookie::make('dark', $item_data, $minutes));
            return response()->json(['status' =>1], 200);

        }

    }


}
