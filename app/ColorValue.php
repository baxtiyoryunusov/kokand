<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColorValue extends Model
{
   public function getColor()
    {
        return $this->hasMany(Color::class, 'id', 'color_id');
    }

    public function getFavori()
    {
        return $this->hasOne(Favori::class, 'color_values_id', 'id');
    }
    public function getColorFirst()
    {
        return $this->hasOne(Color::class, 'id', 'color_id');
    }
    public function getProduct()
    {
        return $this->hasOne(Product::class, 'id', 'product_id')->orderBy('yangi_price','DESC')->with('getColorValue');
    }
    public function getImg()
    {
        return $this->hasMany(productImg::class, 'color_values_id', 'id')->orderBy('order','ASC');
    }
    public function getImgNull()
    {
        return $this->hasOne(productImg::class, 'color_values_id', 'id')->where('order', 0);
    }
   /* public function getProductColorValue()
    {
        return $this->hasMany(ProductVariantValue::class, 'color_id', 'id')->with('getVariant');
    }*/

    public function getColorXususiyatValue()
    {
        return $this->hasMany(ProductXususiyatValue::class, 'color_values_id', 'id')->orderBy('xususiyats_id')->with('getXususiyat');
    }
    public function getColorVariantValue()
    {
        return $this->hasMany(ProductVariantValue::class, 'color_values_id', 'id')->orderBy('variant_id')->with('getVariant');
    }

}
