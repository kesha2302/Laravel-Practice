<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class CustomerController extends Controller
{
    public function index(){
        $customer = new Customers();
        $title = "Registration Form";
        $url = url('/customers2');
        $data = compact('customer','title','url');

        return view ('form2')->with($data);
    }

    public function store(Request $request){

        // p($request->all());
        // die;

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

        return redirect('/view');
    }

    public function view(Request $request){
        $search = $request['search'] ?? "";
        if($search != ""){
            $customers = Customers::where('name','LIKE', "%$search%")->orwhere('email','LIKE',"%$search%")->get();
        }
        else{
            // $customers = Customers::all();
            $customers = Customers::paginate(10);
        }

        $data = compact('customers');
        return view('dataview')->with($data);
    }

    public function delete($id){
        $customer = Customers::find($id);
        if(!is_null($customer)){
            $customer->delete();
        }

        return redirect()->back();
    }

    public function edit($id){
        $customer = Customers::find($id);
        if(!is_null($customer)){
            $title = "Update Data";
            $url = url('/customer/update') . "/" . $id;
            $data = compact('customer', 'title','url');
            return view('form2')->with($data);
        }else{
            return redirect('view');
        }

    }

    public function update($id, Request $request){

        $customer = Customers::find($id);

        $customer->name = $request['name'];
        $customer->email = $request['email'];
        // $customer->password = md5($request['password']);
        // $customer->password= Hash::make($request->input('password'));
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];

        $customer->save();

        return redirect('/view');
    }

    public function trash(){
        $customers = Customers::onlyTrashed()->get();
        $data = compact('customers');
        return view('trashdata')->with($data);
    }

    public function restore($id){
        $customers = Customers::withTrashed()->find($id);
        if(!is_null($customers)){
            $customers->restore();
        }

        return redirect('/view');
    }

    public function forcedelete($id){
        $customers = Customers::withTrashed()->find($id);
        if(!is_null($customers)){
            $customers->forceDelete();
        }

        return redirect()->back();
    }
}
