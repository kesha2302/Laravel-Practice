<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UploadController;
use App\Models\Customers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });


//GET request
Route:: get('/demo', function(){
 echo "This is demo Page";
});


Route::get('/about1', function(){
 return "This is About Page";
});


//Post request
Route::post('/submit',function(){
    return "Form submitted";
});

//Put request
Route::put('/updtae',function(){
return "Data Updated";
});

//DELETE request
Route::delete('/delete',function(){
return "Data Deleted";
});


// Any request
Route::any('/any', function(){
    return "Response to any HTTP method";
});





Route::get('user/{id}', function($id){
    return "User ID: $id";
});


Route::get('user1/{name}/{id}', function ($name,$id){
echo $name;
echo $id;
});


Route::get('/demo1/{name}/{id?}',function($name,$id = null){
//Declar variable
    $data = compact('name','id');
//passing data to demo file
    return view('demo')->with($data);
});


Route::get('/demo2/{name?}',function($name = null){
    $demo ="<h2>Innobrain Technologies</h2>";
    $data = compact('name','demo');
    return view('demo2')->with($data);
});

Route::get('/home2',function(){
    return view('home2');
});


Route::get('/', function(){
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});


Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'register']);


Route::get('/customer',function(){
    $customers = Customers :: all();
    echo "<pre>";
    print_r($customers->toArray());
});

Route::get('/customers',[CustomerController::class,'index']);
Route::post('/customers2',[CustomerController::class,'store']);

Route::get('/view',[CustomerController::class,'view']);

Route::get('/byid', function(){
    $customers = Customers::find(10);
    if($customers){
        echo '<pre>';
        print_r($customers->toArray());
    }
    else{
        echo "Customer Id not found";
    }
});

Route::get('/bywhere', function(){
    $customers = Customers::where('dob','>','2024-01-01')->get();
    if($customers->isNotEmpty()){
        Echo "<pre>";
        print_r($customers->toArray());
    }else{
        echo "No customer found after date 20204";
    }
});

Route::get("/byfirst",function(){
    $customers = Customers::where('name','Kinjal')->first();
    if($customers){
        echo '<pre>';
        print_r($customers->toArray());
    }
    else{
        echo "No customer found";
    }
});


Route::get('/customer/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');

Route::get('/customer/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
Route::post('/customer/update/{id}',[CustomerController::class,'update'])->name('customer.update');

//Layout2
Route::get('/indexhome',[LayoutController::class,'index']);


//Session
Route::get('/get-session',function(){
    // $session = session()->all();
    $session = Session::all();
    p($session);
});

Route::get('/set-session', function(Request $request){
    $request->session()->put('user_name','Kesha');
    $request->session()->put('user_id','1');

    return redirect('get-session');
});


Route::get('/destory-session', function(){
    //  session()->forget('user_name');
    Session::forget(['user_name','user_id']);

     return redirect('get-session');
});


// Soft Delete
Route::get('/trash',[CustomerController::class,'trash']);
Route::get('/customer/restore/{id}',[CustomerController::class,'restore'])->name('customer.restore');
Route::get('/customer/forcedelete/{id}',[CustomerController::class,'forcedelete'])->name('customer.forcedelete');


//Uploading Image file
Route::get('/upload',[UploadController::class,'index']);
Route::post('/uploadfile',[UploadController::class,'upload']);
