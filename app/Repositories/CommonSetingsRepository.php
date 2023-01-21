<?php

namespace App\Repositories;

use App\CommonSetings;
use http\Env\Request;
use App\Services\Interfaces\CommonSetingsInterface;
use Illuminate\Support\Collection;

class CommonSetingsRepository implements CommonSetingsInterface
{
    protected $model;

    public function __construct(CommonSetings $model)
    {
        $this->model = $model;
    }

    public function all(): Collection
    {
        return $model = $this->model->orderBY('updated_at', 'DESC')->get();
    }

    public function get($colum ,$id)
    {
        return $model = $this->model->where($colum, $id)->get();
    }

    public function getIdfirst($id)
    {
        return $model = $this->model->where('id', $id)->first();
    }



    public function edit($request)
    {

    }

    public function update($request, $id)
    {
        $this->vali($request);
        $item= $this->model->where('id', $id)->first();
        $item->meta_title=$request->meta_title;
        $item->meta_content=$request->meta_content;
        $item->meta_keywords=$request->meta_keywords;
        $item->save();

    }


    public function vali($request)
    {
        $request->validate([
            'meta_title' => 'min:3|max:255',
            'meta_content' => 'min:3|max:255',
            'meta_keywords' => 'max:255',
        ]);
    }





    public function commonstingslogoUpdate( $request,$id)
    {


        $img = $this->model->find($id);
        $imageOne = $request->file;
        $filename = 'Logo' . '-' . time() . '.' . $imageOne->getClientOriginalName();
        $location = public_path('../public_html/logo/');
        $imageOne->move($location, $filename);
        $img->logo = 'logo/' . $filename;
        $img->save();
        return $img;


    }
    public function commonstingsfavUpdate($request, $id)
    {
        $img =$this->model->find($id);
        $imageOne = $request->file;
        $filename = 'Logo' . '-' . time() . '.' . $imageOne->getClientOriginalName();
        $location = public_path('../public_html/logo/');
        $imageOne->move($location, $filename);
        $img->logo2 = 'logo/' . $filename;
        $img->save();
        return $img;

    }
}
