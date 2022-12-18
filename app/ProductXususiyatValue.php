<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductXususiyatValue extends Model
{
//    frontend
    public function getXususiyat()
    {
        return $this->hasMany(Xususiyat::class, 'id', 'xususiyats_id')->orderBy('name');
    }
    //    frontend
    public function getXususiyatValueOne()
    {
        return $this->hasOne(XususiyatValue::class, 'id', 'xususiyat_value_id')->orderBy('name');
    }

}
