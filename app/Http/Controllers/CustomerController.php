<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function index(){
        return view ('form2');
    }

    public function store(Request $request){

        $request->validate(
            [
                'name' => 'required',
                'email'=>'required|email',
                'password' => 'required|confirmed',
                'password_confirmation'=>'required',
                'address'=>'required',
                'state'=>'required',
                'country'=>'required',
            ]
         );
        // echo "<pre>";
        // print_r($request->all());

        $customer = new Customers;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        // $customer->password = md5($request['password']);
        $customer->password= Hash::make($request->input('password'));
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];

        $customer->save();

        return redirect('/');
    }
}
