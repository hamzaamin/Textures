<?php

namespace App\Http\Controllers;

use App\category;
use App\subcategory;
use Illuminate\Http\Request;

class Homepage extends Controller
{
    //
    public function  index()
    {
       $cat=new category();
       $cat=category::all();

       return view('welcome')->with(['categ'=>$cat]);


    }
    public function getsubcat($categoryname)
    {
        $cat=new category();
        $cat=$cat->where('name',$categoryname)->first();
        $subcat=new subcategory();
        $catid=$cat->id;

        $subcat=$subcat->where('categoryID',$catid)->get();
        if($subcat == null or $subcat=="") {
            $products=new \App\product();
            $products=$products->where('CategoryID',$cat->id);
            return view('products')->with(['products' => $products]);
        }
        return view('subcategory')->with(['subcategory'=>$subcat]);
    }

    public function working()
    {
        return view("working");
    }

    public function login()
    {
        return view("login");

    }

    public function about()
    {
        return view("about");
    }

    public function resources()
    {
        return view("resources");
    }

    public function register()
    {
        return view("register");
    }

    public function contact()
    {
        return view("contact");
    }

    public function faq()
    {

        return view ('faq');
    }

    public function termsofuse()
    {
        return view ('terms-of-use');
    }
}
