<?php

namespace App\Repositories;

use App\Product;
use http\Env\Request;

class ProductRepository
{
    protected $model;

    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $model = $this->model->with('getColorValue')->with('getColorValueFirst')->with('getKat')->orderBY('updated_at','DESC')->get();
    }
    public function getIdfirst($id)
    {
        return $model = $this->model->where('id', $id)->first();
    }


    public function store($request)
    {

        $this->vali($request);
        $name = $request->name;
        $category_id = $request->category_id;
        $status = $request->status;
        $slug = $request->slug;
        $yangi_price = $request->yangi_price;
        $product = new $this->model;
        $product->name = $name;
        $product->category_id = $category_id;
        $product->slug = $slug;
        $product->yangi_price = $yangi_price;
        $product->eski_price = $request->eski_price;
        $product->stock_method = 0;
        $product->barcode = 0;
        $product->detalis = $request->detalis;
        $product->status = $status = $status ? 1 : 0;
        $control = Product::where('sku', $request->sku)->first();
        if ($control) {
            alert()->warning("Error", "Bu Stok Kodi Mavjud");
        } else {
            $product->sku = $request->sku;
            alert()->success("OK", "Mahsulot saqlandi");
            $product->save();
        }


    }

    public function deleteAll($request)
    {
        foreach ($request->id as $v) {
            $bayi = $this->model->where('id', $v)->first();
            $bayi->delete();
        }

    }

    public function edit($request){

    }
     public function update($request){

    }


    public function vali($request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'yangi_price' => 'required|min:3',
        ]);
    }

    public function delete($request)
    {
        $menu = $this->model->where('id', $request->ir)->first();
        $menu->delete();

    }

    public function checkStatus($request)
    {
        $menuID = $request->id;
        $menu = $this->model->find($menuID);
        $status = $menu->status;
        $menu->status = $status ? 0 : 1;
        $menu->save();
        return $menu;
    }
}
