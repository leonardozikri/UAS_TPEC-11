<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
	{
		$data['products'] = \DB::table('products')->get();
		return view('produk', $data);
		
	}
}
