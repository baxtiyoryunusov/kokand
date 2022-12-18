<?php

namespace App\Repositories;

use App\Xususiyat;
use http\Env\Request;

class XususiyatRepository
{
    public function all()
    {
        return $xususiyat = Xususiyat::with('getXususiyatValue')->get();
    }
    public function store($request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'slug' => 'required|min:3|max:255',

        ]);
        $Xususiyat = new Xususiyat;
        $Xususiyat->name=$request->name;
        $Xususiyat->slug=$request->slug;
        $Xususiyat->save();
    }
}
