<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Repositories\XususiyatRepository;
use App\Xususiyat;
use Illuminate\Http\Request;

class XususiyatController extends Controller
{

    protected $xususiyatRepository;

    public function __construct(XususiyatRepository $xususiyatRepository)
    {

        $this->xususiyatRepository = $xususiyatRepository;
    }
    public function index()
    {

        $xusuxiyat=$this->xususiyatRepository->all();
        return view('newadmin.xususiyat.index',compact('xusuxiyat'));
    }


    public function create()
    {
        //
    }



    public function store(Request $request)
    {
        $this->xususiyatRepository->store($request);
        alert()->success("SuccessAlert", "Xususiyat saqlandi");
        return back();

    }
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function XusuiyatDelete(Request $request)
    {
        $menu = Xususiyat::where('id', $request->ir)->first();
        $menu->delete();
        return response()->json(['message' => 'ok'], 200);
    }
    public function destroy($id)
    {
        //
    }
}
