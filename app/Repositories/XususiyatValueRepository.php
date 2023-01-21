<?php

namespace App\Repositories;

use App\XususiyatValue;
use http\Env\Request;
use App\Services\Interfaces\XususiyatInterface;
use Illuminate\Support\Collection;

class XususiyatValueRepository implements XususiyatInterface
{ protected $model;

    public function __construct(XususiyatValue $model)
    {
        $this->model = $model;
    }

    public function all(): Collection
    {
        return $xususiyat = $this->model->orderBY('updated_at', 'DESC')->get();
    }

    public function store($request)
    {
        $request->validate([
            'xususiyat_val' => 'required|min:2|max:255',

        ]);
        
        $xususiyatValue = new $this->model;
        $xususiyatValue->name=$request->xususiyat_val;
        $xususiyatValue->xususiyat_id=$request->xususiyat_id;
        $xususiyatValue->save();
    }


    public function with($relations)
    {

        if (is_string($relations))
        {
            $this->with = explode(',', $relations);
            return $this;
        }

        $this->with = is_array($relations) ? $relations : [];

        return $this;
    }
    public function delete($request)
    {

        $menu = $this->model->where('id', $request->ir)->first();
        $menu->delete();
    }
}
