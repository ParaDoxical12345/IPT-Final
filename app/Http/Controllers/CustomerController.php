<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customer = Customer::orderBy('id')->get();
        return view('customer.index', ['customers'=> $customer]);
    }

    public function create(){
        return view('customer.create');
    }

    public function store(Request $request){

        $request->validate([
            'last_name'     =>  'required',
            'first_name'    =>  'required',
            'address'       =>  'required',
            'phone'         =>  'required|numeric',
            'email'         =>  'required|email'
        ]);

        $customer = Customer::create([
            'last_name'     =>  $request->last_name,
            'first_name'    =>  $request->first_name,
            'address'       =>  $request->address,
            'phone'         =>  $request->phone,
            'email'         =>  $request->email
        ]);

        return redirect('/customers')->with('message', "$customer->last_name $customer->first_name has been added");
    }

    public function edit(Customer $customer){
        return view('customer.edit', compact('customer'));
    }

    public function update(Customer $customer, Request $request){
        $request->validate([
            'last_name'     =>  'required',
            'first_name'    =>  'required',
            'address'       =>  'required',
            'phone'         =>  'required|numeric',
            'email'         =>  'required|email'
        ]);

        $customer->update($request->all());
        return redirect('/customers')->with('message', "$customer->last_name $customer->first_name has been updated successfully");
    }

    public function delete(Customer $customer){
        $customer->delete();

        return redirect('/customers')->with('message', " $customer->last_name , $customer->first_name has been deleted");
    }
}
