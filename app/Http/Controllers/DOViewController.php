<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class DOViewController extends Controller
{
    public function index()
    {
        $vendors = DB::select('select * from vendors');
        $products = DB::select('select * from products');
        return view('do',['vendors'=>$vendors], ['products'=>$products]);
    }
}

