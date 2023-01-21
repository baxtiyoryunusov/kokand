<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Favori;
use App\ColorValue;

class AdminFavoriController extends Controller
{

    public function index()
    {
        $color = ColorValue::with('getFavori')->with('getFavoriget')->get();
        return view('newadmin.favori.index', compact('color'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
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

    public function destroy($id)
    {
        //
    }
}
