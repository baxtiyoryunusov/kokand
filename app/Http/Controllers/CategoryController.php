<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    protected $appends = "getParentsTree";


    public static  function getParentsTree($kategory,$name)
    {
        if ($kategory){
        if ($kategory->p_id==0){
            return $name;
        }
        }else{
            return $name;
        }

        $parent = Category::find($kategory->p_id);
        if($parent){

            $name = $parent->name.' > '.$name;
        }
        return CategoryController::getParentsTree($parent,$name);
    }
    protected $append = "getParentsFirst";
    public static  function getParentsFirst($kategory,$name)
    {
        if ($kategory){

        if ($kategory->p_id==0){
            return $name;
        }else{
            $parent = Category::where('id',$kategory->p_id)->first();

            if($parent){

                    $name = $parent->id;

                return CategoryController::getParentsFirst($parent,$name);
            }
        }
        }else{
            return $name;
        }

        /* $parent = Category::where('p_id',0)->where('id',$kategory->p_id)->first();

         if($parent){
             if ($parent==0){
                 $name = $parent->name;
             }
             return CategoryController::getParentsFirst($parent,$name);
         }*/
        return CategoryController::getParentsFirst($parent,$name);
    }


    public function index()
    {
        $kategorys = Category::with('getChildren')->orderBy("order", 'ASC')->get();
        $order = Category::where('order','!=',99999)->with('findP')->with('getP')->orderBy("order", 'DESC')->first();


        return view("newadmin.category.index", compact('kategorys','order'));
    }

    public function create()
    {
        //
    }

    public function checkStatus(Request $request)
    {
        try {
            $menuID = $request->id;
            $menu = Category::find($menuID);
            $status = $menu->status;
            $menu->status = $status ? 0 : 1;
            $menu->save();
            return response()->json(['message' => 'ok', 'status' => $menu->status], 200);
        } catch (\Exception $exception) {
            return response()->json(['message' => 'basarsiz', 'status' => $status], 500);
        }

    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'slug' => 'required|min:3',
        ]);
        $name = $request->name;
        $p_id = $request->p_id;
        $status = $request->status;
        $slug = $request->slug;
        $order = $request->order;
        $kategory = new Category;
        $kategory->name = $name;
        $kategory->slug = $slug;
        if($p_id){
            $kategory->p_id = $p_id;
        }
        if ($order){
            $kategory->order = $order;
        }else{
            $kategory->order = 1;
        }
        if ($request->hasFile('img')) {
            $imageOne = $request->file('img');
            $filename = 'kategory' . '-' . time() . '.' . $imageOne->getClientOriginalExtension();
            $location = public_path('../public_html/kategoryRasm/');
            $imageOne->move($location, $filename);
            $kategory->img = 'kategoryRasm/'.$filename;
        }
        $kategory->status = $status = $status ? 1 : 0;
        $kategory->save();
        if ($request->p_id) {
            alert()->success("SuccessAlert", "Ichki Kategorya bo'lib saqlandi");
            return back();
        } else {
            alert()->success("SuccessAlert", "Bosh Kategorya bo'lib saqlandi");
            return back();
        }
    }

    public function show($id)
    {
        //
    }

    public function cat_delete(Request $request)

    {
        foreach ($request->id as $v) {
            $bayi = Category::where('id', $v)->first();
            $bayi->delete();
        }
        return response()->json(['message' => 'ok'], 200);

    }

    public function cat_delete_tek(Request $request)

    {

        $menu = Category::where('id', $request->ir)->first();
        $menu->delete();

        return response()->json(['message' => 'ok'], 200);

    }

    public function edit($id)
    {
        $category=Category::find($id);
        $order = Category::where('order','!=',99999)->with('findP')->with('getP')->orderBy("order", 'DESC')->first();
       return view('newadmin.category.edit',compact('category','order'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'slug' => 'required|min:3',
        ]);
        $category=Category::find($id);
        $category->name=$request->name;
        $category->slug=$request->slug;
        $category->order=$request->order;
        $category->p_id=$request->p_id;
        $category->status=$request->status?1:0;
        $category->save();
        alert()->success("ok", "ok");
        return back();

    }


    public function destroy($id)
    {
        //
    }
}
