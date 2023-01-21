<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\CommonSetingsRepository;

class CommonSetingsController extends Controller
{
    protected $commonSetingsRepository;

    public function __construct(CommonSetingsRepository $commonSetingsRepository)
    {

        $this->commonSetingsRepository = $commonSetingsRepository;

    }

    public function index()
    {
        $common = $this->commonSetingsRepository->getIdfirst(1);
        return view('newadmin.commonsetings.index', compact('common'));
    }

    

    public function update(Request $request, $id)
    {
        $this->commonSetingsRepository->update($request, $id);
        alert()->success("SuccessAlert", "Saqlandi");

        return back();
    }

    public function commonstingslogoUpdate(Request $request, $id)
    {
        $img= $this->commonSetingsRepository->commonstingslogoUpdate($request, $id);
        return response()->json(['message' => 'ok', 'imgajx' => $img], 200);
    }

    public function commonstingsfavUpdate(Request $request, $id)
    {
       $img= $this->commonSetingsRepository->commonstingsfavUpdate($request, $id);
        return response()->json(['message' => 'ok', 'imgajx' => $img], 200);
    }



}
