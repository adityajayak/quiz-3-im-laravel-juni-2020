<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    //---------------------index-------------------------------------------
    public function index()
    {
        $artikel = ArtikelModel::get_all();
        //dd($items);
        return view('artikel.index', compact('artikel'));
    }
    //-------------------------create-----------------------
    public function create()
    {
        return view('artikel.form');
    }
    //------------------------------show---------------------------------------------------
    public function show($id)
    {
        $items = ArtikelModel::find_by_id($id);
        //dd($items);
        $artikel = ArtikelModel::find_by_id($id);
        return view('artikel.show', compact('arikel'));
    }

    //---------------------------------------- delete----------------------------------
    public function destroy($id)
    {
        $deleted = ArtikelModel::destroy($id);
        return redirect('/pertanyaan');
    }
    //--------------------------store------------------------------------
    public function store(Request $request)
    {
        //dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        $items = ArtikelModel::save($data);
        //dd($items);
        if ($items) {
            return redirect('/artikel');
        }
    }
    //---------------------------edit----------------------------------------------
    public function edit($id)
    {
        $items = ArtikelModel::find_by_id($id);
        //dd($items);
        return view('Pages.edit', compact('items'));
    }
    //----------------------------- update ------------------------
    public function update($id, request $request)
    {
        $items = ArtikelModel::update($id, $request->all());
        return redirect('/artikel');
    }
}
