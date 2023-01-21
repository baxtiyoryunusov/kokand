<?php

namespace App\Repositories;

use App\Variant;
use http\Env\Request;
use App\Services\Interfaces\VariantInterface;
use Illuminate\Support\Collection;

class VariantRepository implements VariantInterface
{
    protected $model;

    public function __construct(Variant $model)
    {
        $this->model = $model;
    }

    public function all(): Collection
    {
        return $model = $this->model->orderBY('updated_at', 'DESC')->get();
    }

    public function getIdfirst($id)
    {
        return $model = $this->model->where('id', $id)->first();
    }

    /*ishlamoqda....*/
    public function store($request)
    {

        $this->vali($request);
        $variant = new $this->model;
        $variant->name=$request->name;
        $variant->slug=$request->slug;
        $variant->save();

    }

    public function deleteAll($request)
    {
        foreach ($request->id as $v) {
            $bayi = $this->model->where('id', $v)->first();
            $bayi->delete();
        }

    }
    /*ishlamoqda....*/
    public function update($request ,$id)
    {

        $this->vali($request);
        $variant = $this->model->where('id', $id)->first();
        $variant->name=$request->name;
        $variant->slug=$request->slug;
        $control = $this->model->where('id', '!=', $id)->where('slug', $request->slug)->first();
        if ($control) {
            return 1;
        } else {
            $variant->slug = $request->slug;
            $variant->save();
            return 0;
        }

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
    public function with($relations)
    {
        return $this->model->with($relations);
    }
    /*ishlamoqda.... validatsiya*/
    public function vali($request)
    {
        $request->validate([
            'name' => 'required|min:1|max:255',
            'slug' => 'required|min:1|max:255',
        ]);
    }


}
