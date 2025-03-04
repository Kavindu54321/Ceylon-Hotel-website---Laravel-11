<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $booking = Booking::all();
        return view('booking.index', compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('booking.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
        
        $fileName = time() . '.' . $request->image->getClientOriginalExtension(); 
        $request->image->move(public_path('images'), $fileName);

            $data = new Booking;
            $data->bkn_id  = $request->input('bkn_id');
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
           
        return redirect()->route('booking.index')->with('success', 'Staff created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Booking::find($id);
        return view('booking.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $data = Booking::find($id);
        if($request->image){
        $fileName = time() . '.' . $request->image->getClientOriginalExtension(); 
        $request->image->move(public_path('images'), $fileName);
        }else{
            $fileName = $data ->image;
        }

            
            $data->bkn_id  = $request->input('bkn_id');
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
           
        return redirect()->route('booking.index')->with('success', 'Staff created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        $booking ->delete();
        return redirect()->route('booking.index')->with('success', 'Staff created successfully.');
    }
}
