<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ='categoris';

    public function getP()
    {
        return $this->hasMany(Category::class, 'p_id', 'id')->with('getP')->with('getPro');
    }
    public function findP()
    {
        return $this->belongsTo(Category::class, 'p_id', 'id')->with('findP');
    }

    public function getPF()
    {
        return $this->hasMany(Category::class, 'p_id', 'id')->with('getP')->where('status', 1)->with(['getPro' => function ($query) {
            $query->orderBy('order', 'ASC');
        }]);;
    }
    public function getPro()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

    public function getParent()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

    public function getChildren()
    {
        return $this->hasMany(Category::class, 'p_id', 'id');
    }
}
