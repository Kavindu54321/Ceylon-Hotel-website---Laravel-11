<?php

namespace App\Http\Controllers;
use App\Models;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staff = Staff::all();
        return view('staff.index', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
       $fileName = time() . '.' . $request->image->getClientOriginalExtension(); 
            $request->image->move(public_path('images'), $fileName);
            
           $data = new Staff;
             $data->staff_id  = $request->input('staff_id');
            $data->name  = $request->input('name');
            $data->email     = $request->input('email');
            $data->join_date    = $request->input('join_date');
            $data->phone_number = $request->input('phone_number');
            $data->on_duty_role  = $request->input('on_duty_role');
            $data->leaving_time    = $request->input('leaving_time');
            $data->image     = $fileName;
            $data->save();
           
        return redirect()->route('staff.index')->with('success', 'Staff created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $data = Staff::find($id);
        return view('staff.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Staff::find($id);
        if($request->image){
        $fileName = time() . '.' . $request->image->getClientOriginalExtension(); 
        $request->image->move(public_path('images'), $fileName);
        }else{
            $fileName = $data ->image;
        }
            
      
       $data->staff_id  = $request->input('staff_id');
       $data->name  = $request->input('name');
       $data->email     = $request->input('email');
       $data->join_date    = $request->input('join_date');
       $data->phone_number = $request->input('phone_number');
       $data->on_duty_role  = $request->input('on_duty_role');
       $data->leaving_time    = $request->input('leaving_time');
       $data->image     = $fileName;
       $data->save();
           
       toastr()->addsuccess('your update successful');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff)
    { 
        $staff->delete();
        toastr()->addsuccess('Staff deleted successfully');
        return redirect()->route('staff.index');
    }
}
