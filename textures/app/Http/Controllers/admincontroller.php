<?php

namespace App\Http\Controllers;

use App\category;
use App\product;
use App\subcategory;
use Illuminate\Http\Request;

use DB;

class admincontroller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    //public function store(request $request)
   //{

      // if ($request->hasFile('image'))
       //{
          // $request->file('image');//this is how we get the stored path of the uploaded file
          // $originalname= $request->image->getClientOriginalName();

          // $temp= $request->image->storeAs('public/Images',$originalname);

          // $imagepath= $request->image->path(); //to get the path of the image
           // trim($abc,"public/Images/");
           //  return  $request->image->store('public/image');

           /*   $filename = $request->image->getClientOriginalName();

              $savedname = $request->image->storeAs('public',$filename); */

           //$input_value = $request->get('fname');

           //$Category =new \App\category();

           // $File->Name = $savedname;

          // $Category->name = $input_value;
           //$Category->pitcure=$originalname;




//           $Category->save();

  //         return view('addCategory');






    //   }
      // else
       //{
         ///  return 'No File Selected';
       //}


   //}
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
    public function addnewcategory(request $request)
    {



            $cat = new category();
            $cat->name = $request->get('categoryname');

            //$request->file('image');//this is how we get the stored path of the uploaded file
            //$originalname = $request->image->getClientOriginalName();
            //$abc = $request->image->storeAs('public/Images', $originalname);

            //$imagepath= $request->image->path(); //to get the path of the image
            //trim($abc,"public/Images/");

            //  return
            $cat->pitcure = "abc.png";
            //$file = $request->file('image');
            // rename your file
            // $name = $file->image->getClientOriginalName();
            //\Storage::disk('local')->put($name,  \File::get($file));
            //  return  $request->image->store('public/image');

            /*   $filename = $request->image->getClientOriginalName();

               $savedname = $request->image->storeAs('public',$filename); */


            // $File->Name = $savedname;


      //  }
        //else{
         //   return "No file selected";
        //}

        $cat->save();

      //  $cat->save();

        //$cat=$cat::all();

  //      return view('Category')->with(['categorylist'=>$cat]);
    }

    public function addnewsubcategory(request $request)
    {
        $subcat=new subcategory();
        $subcat->name=$request->get('subcategory');
        $subcat->categoryID=$request->get('categorylist');
        $subcat->pitcure="abc123";
        $subcat->pitcure_hover="abc346";
        $subcat->save();
        $subcat=$subcat::all();
        $cat=new category();
        $cat=$cat::all();
        return view('subcategory')->with(['categorylist'=>$cat])->with(['subcatgorylist'=>$subcat]);
    }

    public function addnewproduct(request $request)
    {
        $product=new product();
        $cat=new category();
        $subcat=new subcategory();
        $product->name=$request->get('product');
        $product->categoryid=$request->get('categorylist');
        $product->subcategoryid=$request->get('subcategorylist');
        $product->pitcure='subcategroy.png';
        $product->save();
        $product=$product::all();
        $cat=$cat::all();
        $subcat=$subcat::all();
        return view('products')->with(['categorylist'=>$cat])->with(['subcatgorylist'=>$subcat])->with(['productslist'=>$product]);

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
        $product=new product();
        $cat=new category();
        $subcat=new subcategory();

        $product=$product::all();
        $cat=$cat::all();
        $subcat=$subcat::all();
        return view('products')->with(['categorylist'=>$cat])->with(['subcatgorylist'=>$subcat])->with(['productslist'=>$product]);

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
