<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;
use Illuminate\Support\Str;

class ItemController extends Controller
{
    public function index(){
    	$data = artikelModel::get_all(); 
    	return view('content.tabel_artikel',compact('data'));
    }
    public function create(){
    	return view('content.form');
    }

    public function store(request $request){
    	//dd($request->all());
    	$data = $request->all();
    	$slug = Str::slug($data["judul"]);
    	$data2 = ["slug" => "$slug"]; 
    	$hasil = array_merge($data,$data2);
    	unset($hasil["_token"]);
    	$item = artikelModel::save($hasil);
    	if ($item) {
    		return redirect('/artikel');
    	}
    }

    public function show($id){
        $data = artikelModel::find_by_id($id);
       	//explode(",", $data["tag"]);
        return view('content.detail',compact('data'));
    }

    public function edit($id){
        $data = artikelModel::find_by_id($id);
        return view('content.edit',compact('data'));
    }

    public function update(request $request){
        $data = $request->all();
        unset($data['_token'], $data['_method']);
        $up = artikelModel::update($data);
        if ($up) {
            return redirect('/artikel');
        }
    }

    public function destroy($id){
        artikelModel::delete($id);
        return redirect('/artikel');
    }
}
