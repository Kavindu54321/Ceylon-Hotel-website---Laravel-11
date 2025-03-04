<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = Customer::all();
        return view('customer.index', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $fileName = time() . '.' . $request->image->getClientOriginalExtension(); 
        $request->image->move(public_path('images'), $fileName);
        
            $data = new Customer;
           
            $data->name  = $request->input('name');
            $data->room_type    = $request->input('room_type');
            $data->Total_member = $request->input('Total_member');
            $data->time  = $request->input('time');
            $data->start_date    = $request->input('start_date');
            $data->end_date   = $request->input('end_date');
            $data->email    = $request->input('email');
            $data->phone_number   = $request->input('phone_number');
            $data->massage   = $request->input('massage');
            $data->image     = $fileName;
            $data->save();
           
        return redirect()->route('customer.index')->with('success', 'Staff created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Customer::find($id);
        return view('customer.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $data = Customer::find($id);
        if($request->image){
        $fileName = time() . '.' . $request->image->getClientOriginalExtension(); 
        $request->image->move(public_path('images'), $fileName);
        }else{
            $fileName = $data ->image;
        }

            
            
            $data->name  = $request->input('name');
            $data->room_type    = $request->input('room_type');
            $data->Total_member = $request->input('Total_member');
            $data->time  = $request->input('time');
            $data->start_date    = $request->input('start_date');
            $data->end_date   = $request->input('end_date');
            $data->email    = $request->input('email');
            $data->phone_number   = $request->input('phone_number');
            $data->massage   = $request->input('massage');
            $data->image     = $fileName;
            $data->save();
           
        return redirect()->route('customer.index')->with('success', 'Staff created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer ->delete();
        return redirect()->route('customer.index')->with('success', 'Staff created successfully.');
    }
}
