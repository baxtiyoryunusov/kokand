<?php

namespace App\Repositories;

use App\Color;
use App\Services\Interfaces\ColorInterface;
use Illuminate\Support\Collection;

class ColorRepository implements ColorInterface
{
    protected $model;

    public function __construct(Color $model)
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

    public function get($colum, $id)
    {
        return $model = $this->model->where($colum, $id)->get();
    }

    public function store($request)
    {
        $this->vali($request);
        $variant = new $this->model;
        $variant->name = $request->name;
        $variant->slug = $request->slug;
        $variant->color_kod = $request->colorkod;
        $variant->text_kod = $request->textkod;
        $variant->save();

    }
    public function delete($request)
    {
        $menu = $this->model->where('id', $request->ir)->first();
        $menu->delete();

    }
    public function vali($request)
    {
        $request->validate([
            'name' => 'required|min:1|max:255',
            'colorkod' => 'required|min:1|max:255',
            'slug' => 'required|min:1|max:255',
            'textkod' => 'required|min:1|max:255',
        ]);
    }

}
