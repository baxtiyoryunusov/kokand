<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favori extends Model
{
    protected $table= 'favoris';
    public function getColor()
    {
        return $this->hasOne(ColorValue::class, 'id', 'color_values_id')->with('getProduct')->with("getColorFirst")->with("getImgNull");
    }

}
