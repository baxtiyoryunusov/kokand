<?php

namespace App\Repositories;

use App\Category;
use http\Env\Request;
use App\Services\Interfaces\CategoryInterface;
use Illuminate\Support\Collection;

class CategoryRepository implements CategoryInterface
{
    protected $model;
    private $categotyArr = array();
    public function rec($kategory)
    {
        $this->categotyArr[] = $kategory->id;
        if ($kategory->getChildren) {
            foreach ($kategory->getChildren as $item) {
                $this->rec($item);
            }
        }

    }
    public function __construct(Category $model)
    {
        $this->model = $model;
    }

    public function filter($request)
    {
        $url = route("category.index") . "?";
        $query = (new $this->model)->newQuery();
        $query->with('getChildren');
        if ($request->get('sort') != "") {
            if (($request->get('by') == "img") or ($request->get('by') == "id") or ($request->get('by') == "category") or ($request->get('by') == "name")or ($request->get('by') == "order")or ($request->get('by') == "status")or ($request->get('by') == "created_at")){

                $query->orderBY($request->get('by'), $request->get('sort'));
                $url .= "&by=" . $request->get('by');
                $url .= "&sort=" . $request->get('sort');
            }
        } if (! $request->get('sort')) {


            $query->orderBY('id', 'DESC');
        $url .= "&by=" . $request->get('by');
        $url .= "&sort=" . $request->get('sort');
        }
        if ($request->has('parent')) {

            if ($request->get('parent') != "") {
                if ($request->input('parent') == 'on') {
                    if ($request->input('child') != 'on') {
                        $query->where('p_id', Null);
                        $url .= "&parent=" . $request->get('parent');

                    }
                }
            }
        }
        if ($request->has('child')) {
            if ($request->get('child') != "") {
                if ($request->input('child') == 'on') {
                    if ($request->input('parent') != 'on') {
                        $query->where('p_id', '>', 0);
                        $url .= "&child=" . $request->get('child');
                    }
                }
            }
        }
        if ($request->get('durum') != "") {
            $durum = trim($request->get('durum'));
            $url .= "&durum=" . $durum;

            if ($request->get('durum') == 2) {
                $query->where('status', 0);
            } else {
                $query->where('status', $durum);
            }
        }
        if ($request->get('keyword') != "") {
            $keyword = trim($request->get('keyword'));
            $url .= "&keyword=" . $keyword;

            $query->whereRaw("concat(name, ' ', slug) like ?", "%" . $keyword . "%");;

        }

        $query = $query->paginate(15);

        return $data = [
            'query' => $query,
            'url' => $url
        ];
    }

    public function all(): Collection
    {
        return $model = $this->model->with('getChildren')->orderBY('updated_at', 'DESC')->get();
    }

    public function get($colum, $id)
    {
        return $model = $this->model->where($colum, $id)->get();
    }

    public function getIdfirst($id)
    {
        return $model = $this->model->where('id', $id)->first();
    }


    public function store($request)
    {

        $this->vali($request);
        $name = $request->name;
        $p_id = $request->p_id;
        $status = $request->status;
        $slug = $request->slug;
        $order = $request->order;
        $category = new $this->model;
        $category->p_id = $p_id;
        $category->name = $name;
        $category->slug = $slug;
        if ($order) {
            $category->order = $order;
        } else {
            $category->order = 1;
        }

        if ($request->hasFile('img')) {
            $imageOne = $request->file('img');
            $filename = 'kategory' . '-' . time() . '.' . $imageOne->getClientOriginalExtension();
            $location = public_path('../public_html/kategoryRasm/');
            $imageOne->move($location, $filename);
            $category->img = 'kategoryRasm/' . $filename;
        }
        $category->status = $status = $status ? 1 : 0;
        $category->save();
        if ($request->p_id) {

            return 1;
        } else {

            return 0;
        }

    }

    public function deleteAll($request)
    {
        foreach ($request->id as $v) {
            $bayi = $this->model->where('id', $v)->first();
            $bayi->delete();
        }

    }

    public function edit($request)
    {

    }

    public function update($request, $id)
    {
        $this->vali($request);
        $category = $this->model->find($id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->order = $request->order;
        $category->p_id = $request->p_id;
        $category->status = $request->status ? 1 : 0;
        $category->save();


    }


    public function delete($request)
    {
        $menu = $this->model->where('id', $request->ir)->first();
        $menu->delete();

    }


    public function checkStatus($request)
    {

        $parent = $this->model->find($request->id);
        $status = $parent->status;
        $parent->status = $status ? 0 : 1;
        $parent->save();


        $kategory = Category::with('getChildren')->orderBy('order', 'ASC')->where('id', $request->id)->first();
        if ($kategory) {
            $this->rec($kategory);


        }



        $menu = $this->model->whereIn('id', $this->categotyArr)->get();


        foreach ($menu as $item){

            $item->status= $parent->status ? 1 : 0;
            $item->save();
        }

        return $parent;
    }

    public function imgUpdate($request, $id)
    {


        $img = brands::find($id);
        $imageOne = $request->file;
        $filename = 'Brend' . '-' . time() . '.' . $imageOne->getClientOriginalName();
        $location = public_path('../public_html/brend/');
        $imageOne->move($location, $filename);
        $img->img = 'brend/' . $filename;
        $img->save();
        return $img;


    }

    public function vali($request)
    {
        $request->validate([
            'slug' => 'required|min:3|max:255',
            'name' => 'required|min:3|max:255',

        ]);
    }
}
