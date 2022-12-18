<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function getKat()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

//frontend
    public function getProductXususiyatValue()
    {
        return $this->hasMany(ProductXususiyatValue::class, 'color_values_id', 'id')->with('getXususiyat');
    }

    public function getColorValue()
    {
        return $this->hasMany(ColorValue::class, 'product_id', 'id')->with('getColor')->with('getColorFirst')->with('getImgNull')->with('getColorXususiyatValue');
    }
    public function getColorValueFirst()
    {
        return $this->hasOne(ColorValue::class, 'product_id', 'id');
    }

    public function getColorValueImgFrontend()
    {
        return $this->hasMany(ColorValue::class, 'product_id', 'id')->where('status', true)->with('getImg')->with('getColorFirst')->with('getImgNull')->with('getColorXususiyatValue');
    }
    public function getColorValueImg()
    {
        return $this->hasMany(ColorValue::class, 'product_id', 'id')->with('getImg')->with('getColorFirst')->with('getImgNull')->with('getColorXususiyatValue');
    }
    public function getBrand()
    {
        return $this->hasOne(brands::class, 'id', 'brand_id');
    }

  /* public public function getImg()
    {
        return $this->hasMany(productImg::class, 'pro_id', 'id');
    }*/


}
