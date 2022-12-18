<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVariantValue extends Model
{
    protected $table='variant_options';
    public function getVariant()
    {
        return $this->hasMany(Variant::class, 'id', 'variant_id')->orderBy('name');
    }
}
