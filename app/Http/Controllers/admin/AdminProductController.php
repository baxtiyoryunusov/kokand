<?php

namespace App\Http\Controllers\admin;

use App\brands;
use App\Color;
use App\ColorValue;
use App\Http\Controllers\Controller;
use App\Product;
use App\productImg;
use App\ProductVariantValue;
use App\ProductXususiyatValue;
use App\Repositories\ProductRepository;
use App\Repositories\XususiyatRepository;
use App\Variant;
use App\Xususiyat;
use App\XususiyatValue;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    protected $productRepository;
    protected $xususiyatRepository;

    public function __construct(ProductRepository $productRepository, XususiyatRepository $xususiyatRepository)
    {
        $this->productRepository = $productRepository;
        $this->xususiyatRepository = $xususiyatRepository;
    }


    public function index()
    {
        $product = $this->productRepository->all();
        $brandAll = brands::all();
        $xususiyatAll = $this->xususiyatRepository->all();
        return view('newadmin.product.index', compact('product', 'brandAll', 'xususiyatAll'));
    }

    public function create()
    {
        $brend=brands::all();
        return view('newadmin.product.create',compact('brend'));
    }

    public function variantCerateProduct(Request $request)
    {
        $variant = Xususiyat::with("getXususiyatValue")->get();
        $variant->value = [];
        foreach ($variant as $item) {
            $variant->value[] = $xus = XususiyatValue::where("xususiyat_id", $item->id)->get();
        }
        return response()->json(['message' => 'ok', 'variant' => $variant], 200);

    }

    public function changexususiyatProduct(Request $request)
    {
        $val = XususiyatValue::where("xususiyat_id", $request->id)->get();
        return response()->json(['message' => 'ok', 'val' => $val], 200);
    }

    public function store(Request $request)
    {   
        $request->validate([
            'name' => 'required|min:3',
            'sku' => 'required|min:3',
            'slug' => 'required|min:3',
            'yangi_price' => 'required|min:3',
            'category_id' => 'required',
        ]);
        $name = $request->name;
        $category_id = $request->category_id;
        $status = $request->status;
        $slug = $request->slug;
        $yangi_price = $request->yangi_price;
        $product = new Product;
        $product->name = $name;
        $product->category_id = $category_id;
        $product->slug = $slug;
        $product->yangi_price = $yangi_price;
        $product->eski_price = $request->eski_price;
        $product->stock_method = 0;
        $product->brand_id = $request->brend_id;
        $product->barcode = 0;
        $product->detalis = $request->detalis;
        $product->status = $status = $status ? 1 : 0;
        $product->sku = $request->sku;
        $product->save();
        $p = Product::where("slug", $request->slug)->first();
        return redirect()->route('products.edit', $p->id);

    }

    public function edit($id)
    {

        $product_id = Product::with('getColorValue')->where('id', $id)->first();
        $productxusuxiyatvalue = ProductXususiyatValue::where('color_values_id', $id)->get();
        $colorAll = Color::all();
        $xususiyatAll = Xususiyat::with('getXususiyatValue')->get();
        $variantAll = Variant::all();
        return view('newadmin.product.edit', compact('product_id', 'productxusuxiyatvalue', 'colorAll', 'xususiyatAll', 'variantAll'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'sku' => 'required|min:3',
            'slug' => 'required|min:3',
            'yangi_price' => 'required|min:3',
            'category_id' => 'required',
        ]);
        $product = Product::where('id', $id)->first();
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->sku = $request->sku;
        $product->detalis = $request->detalis;
        $product->status = $request->status ? 1 : 0;
        $product->yangi_price = $request->yangi_price;
        $product->eski_price = $request->eski_price;
        $product->category_id = $request->category_id;
        $control = Product::where('id', '!=', $id)->where('sku', $request->sku)->first();
        if ($control) {
            alert()->warning("Error", "Bu Stok Kodi Mavjud");
            return back();
        } else {
            alert()->success("OK", "Mahsulot Tahrirlandi");
            $product->save();
            return back();
        }
    }

    public function deleteAll(Request $request)
    {
        $this->productRepository->deleteAll($request);
        return response()->json(['message' => 'ok'], 200);
    }

    public function delete(Request $request)
    {
        $this->productRepository->delete($request);
        return response()->json(['message' => 'ok'], 200);
    }

    public function checkStatus(Request $request)
    {
        try {
            $menu = $this->productRepository->checkStatus($request);
            return response()->json(['message' => 'ok', 'status' => $menu->status], 200);
        } catch (\Exception $exception) {
            return response()->json(['message' => 'basarsiz', 'status' => 1], 500);
        }
    }
}
