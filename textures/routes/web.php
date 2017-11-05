<?php


Route::group(['middleware' => ['web']], function () {
    Route::auth();
//Route::get('/','Homepage@index');
    Route::get('getcategories','Homepage@getcat');
//Route::get('getsubcat','Indexing@getsubcategories');
    Route::get('/',function() {
        return view("canvasjs");
    });

    Route::get('/category/{categoryname}','Homepage@getsubcat');
    Route::get('/Home/Login/','Homepage@login');
    Route::get('/Home/Register','Homepage@register');
    Route::get('/Home/About','Homepage@about');
    Route::get('/Home/HowItWorks','Homepage@working');

    Route::get('/Home/faq','Homepage@faq');


    Route::get('/Home/terms-of-use','Homepage@termsofuse');
    Route::get('/Home/Contact','Homepage@contact');
    Route::get('/Home/Resources','Homepage@resources');


    Route::post('admin','admincontroller@store');


    Route::get('/admin/addCategory','admincontroller@category');
    Route::get('/Home/admin','admincontroller@index');
    Route::get('/admin','admincontroller@index');
    Route::get('/admin/Home','admincontroller@home');
    Route::get('/admin/addSubCategory','admincontroller@subcategory');
    Route::get('/admin/addProduct','admincontroller@product');

    Route::get('/subcategory/{subcategoryname}','Homepage@index');
    Route::get('/adminlogin','admincontroller@login');

    Route::get('/adminpanel','admincontroller@adminPanel');

    Route::get('/admin/privacyPolicy','admincontroller@privacyPolicy');
    Route::get('/admin/people','admincontroller@people');

    Route::get('/student/read-data','admincontroller@readData');



    Route::get('/home', 'HomeController@index')->name('home');

    Route::post('/admin/addnewcategory','admincontroller@addnewcategory');
    Route::post('/admin/addnewsubcategory','admincontroller@addnewsubcategory');
    Route::post('/admin/addnewproduct','admincontroller@addnewproduct');


});
