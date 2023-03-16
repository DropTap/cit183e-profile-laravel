<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use DB;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    public function index()
    {
        $data = Customer::all();
        return view('customer.index',['customers'=>$data]);
    } 

    public function delete($id){
        $delete = DB::table("customers")
        ->where("id","=",$id)
        ->delete();

        return redirect('/')->with('success','Customer deleted');
    }

    public function addUser(){
        return view('customer.addCustomerUser');
    }

    public function save(Request $req){
        $validated=$req->validate([
            'lastName'=>'required',
            'firstName'=>'required',
            'email'=>'required',
            'contactNumber'=>'required',
            'address'=>'required'
        ]);

        $customer=Customer::create($validated);

        return redirect("/");
    }
}
?>