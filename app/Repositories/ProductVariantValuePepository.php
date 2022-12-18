<?php

namespace App\Repositories;

use App\ProductVariantValue;
use http\Env\Request;

class ProductVariantValueRepository
{
    public function store($request)
    {
    }
    public function getWhereColum($colum,$req)
    {
        return ProductValueValue::where($colum, $req)->get();;
    }
}
