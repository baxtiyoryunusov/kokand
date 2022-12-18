<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Xususiyat extends Model
{
   public function getXususiyatValue()
    {
        return $this->hasMany(XususiyatValue::class, 'xususiyat_id', 'id')->orderBy('name');
    }
}
