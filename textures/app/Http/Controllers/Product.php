<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    public function index()
    {
        $products=\App\product::all();
        return("productsmain")->with(['products'=>$products]);
    }
}
