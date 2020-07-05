<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel{

	public static function get_all(){
		$items = DB::table('articles')->get();
		return $items;
	}

	public static function save($data){
		$new_items = DB::table('articles')->insert($data);
		return $new_items;
	}

	public static function find_by_id($id){
		$item = DB::table('articles')
		->where('id',$id)->first();
		return $item;
	}

	public static function update($data){
		$update_items = DB::table('articles')
		->where('id',$data['id'])
		->update($data);
		return $update_items;
	}

	public static function delete($id){
		$delete = DB::table('articles')
		->where('id',$id)
		->delete();
	}


}