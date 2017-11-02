<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class admincontroller extends Controller
{
   public function store(request $request)
   {

       if ($request->hasFile('image'))
       {
           $request->file('image');//this is how we get the stored path of the uploaded file
           $originalname=$request->image->getClientOriginalName();
            $abc=$request->image->storeAs('public/Images',$originalname);

           $imagepath= $request->image->path(); //to get the path of the image
            trim($abc,"public/Images/");
           //  return  $request->image->store('public/image');

           /*   $filename = $request->image->getClientOriginalName();

              $savedname = $request->image->storeAs('public',$filename); */

           $input_value = $request->get('fname');

           $Category =new \App\category();

           // $File->Name = $savedname;

           $Category->name = $input_value;
           $Category->pitcure=$originalname;




           $Category->save();

           return view('addCategory');






       }
       else
       {
           return 'No File Selected';
       }


   }
   public function login()
   {
       return view("login");
   }

   public function  index()
   {
       return view('adminlogin');
   }
   public function category()
   {

       $category=new \App\category();
       $category=$category::all();



       return view('Category')->with(['categorylist'=>$category]);
   }

    public function subcategory()
    {

        $category=new \App\category();
        $category=$category::all();
        $subcategory=new \App\subcategory();
        $subcategory=$subcategory::all();



        return view('Subcategory')->with(['categorylist'=>$category])->with(['subcatgorylist'=>$subcategory]);
    }

    public function product()
    {

        $category=new \App\category();
        $category=$category::all();
        $subcategory=new \App\subcategory();
        $subcategory=$subcategory::all();




        return view('products')->with(['categorylist'=>$category])->with(['subcatgorylist'=>$subcategory]);
    }

    public function getsubcategorylist($cat){

    }

    public function readData()
   {
               
       $data = DB::table('category')->get();
    
              
           
           return response($data->toArray());

   }




   public function home()
   {
       return view('adminhomepage');
   }


    public function adminPanel()
    {

        return view ('admindashboard');

    }


    public function people()
    {

            return view('people');

    }

    public function privacyPolicy()
    {
            return view('privacyPolicy');
    }



}
