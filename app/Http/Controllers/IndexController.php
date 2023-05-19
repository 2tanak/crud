<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class IndexController extends Controller
{
    public function index(){
		/*
		$category = Category::select('*')->get();
		$category_id = $category->find(1);
		
		$has_manu = $category_id->articles;
		$category_id->articles()->update(['name'=>'s']);
		dd($has_manu);
		*/
		return view('welcome')->render();
	}
}
