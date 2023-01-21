<?php

namespace App\Repositories;

use App\brands;
use http\Env\Request;
use Illuminate\Support\Collection;
use App\Services\Interfaces\BrandsInterface;

class BrandsRepository implements BrandsInterface
{
    protected $model;

    public function __construct(brands $model)
    {
        $this->model = $model;
    }

    public function all(): Collection
    {
        return $model = $this->model->orderBY('updated_at', 'DESC')->get();
    }

    public function get($colum ,$id)
    {
        return $model = $this->model->where($colum, $id)->get();
    }

    public function getIdfirst($id)
    {
        return $model = $this->model->where('id', $id)->first();
    }


    public function store($request)
    {

        $this->vali($request);
        $brand = new $this->model;
        if ($request->hasFile('img')) {
            $imageOne = $request->file('img');
            $filename = 'Brend' . '-' . time() . '.' . $imageOne->getClientOriginalExtension();
            $location = public_path('../public_html/brend/');
            $imageOne->move($location, $filename);
            $brand->img = 'brend/'.$filename;
        }
        $brand->name=$request->name;
        $brand->slug=$request->slug;
        $brand->save();

    }

    public function deleteAll($request)
    {
        foreach ($request->id as $v) {
            $bayi = $this->model->where('id', $v)->first();
            $bayi->delete();
        }

    }

    public function edit($request)
    {

    }

    public function update($request, $id)
    {
        $this->vali($request);
        $product = $this->model->where('id', $id)->first();
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->detalis = $request->detalis;
        $product->detalis = $request->detalis;
        $product->status = $request->status ? 1 : 0;
        $product->yangi_price = $request->yangi_price;
        $product->eski_price = $request->eski_price;
        $product->category_id = $request->category_id;

        $control = $this->model->where('id', '!=', $id)->where('sku', $request->sku)->first();
        if ($control) {

            return 1;

        } else {
            $product->sku = $request->sku;
            $product->save();
            return 0;
        }

    }

    public function vali($request)
    {
        $request->validate([
            'slug' => 'required|min:3|max:255',
            'name' => 'required|min:3|max:255',
            'img' => 'required|max:255',
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

    public function imgUpdate( $request,$id)
    {


        $img = brands::find($id);
        $imageOne = $request->file;
        $filename = 'Brend' . '-' . time() . '.' . $imageOne->getClientOriginalName();
        $location = public_path('../public_html/brend/');
        $imageOne->move($location, $filename);
        $img->img = 'brend/' . $filename;
        $img->save();
        return $img;


    }
}
