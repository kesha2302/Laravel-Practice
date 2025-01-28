<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(){
        return view('upload');
    }

    public function upload(Request $request){
        $request->validate([
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2000',
        ]);

        $fileName = time().'img.'. $request->file('image')->getClientOriginalExtension();
        echo $request->file('image')->storeAs('public/uploads',$fileName);
    }
}
