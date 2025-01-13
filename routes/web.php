<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


//GET request
Route:: get('/demo', function(){
 echo "This is demo Page";
});


Route::get('/about', function(){
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
    return "REsponse to any HTTP method";
});


// match request
Route::match(['get','post'],'/handle',function(){
    return "Handles ant GET and POST request.";
});

Route::get('/dashboard',function(){
    return "Welcome to Dashboard!";
})->name('Dashboard');


Route::get('user/{id}', function($id){
    return "User ID: $id";
});


Route::get('user1/{name}/{id?}', function ($name,$id = null){
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

Route::get('/', function(){
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});


Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'register']);
