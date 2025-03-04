<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $room = Room::all();
        return view('room.index', compact('room'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('room.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fileName = time() . '.' . $request->image->getClientOriginalExtension(); 
        $request->image->move(public_path('images'), $fileName);

            $data = new Room;
            $data->room_id  = $request->input('room_id');
            $data->name  = $request->input('name');
            $data->room_type    = $request->input('room_type');
            $data->Total_member = $request->input('Total_member');
            $data->room_condition = $request->input('room_condition');
            $data->bed_count   = $request->input('bed_count');
            $data->washroom  = $request->input('washroom');
            $data->image     = $fileName;
            $data->save();
           
        return redirect()->route('room.index')->with('success', 'Staff created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Room::find($id);
        return view('room.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Room::find($id);
        if($request->image){
        $fileName = time() . '.' . $request->image->getClientOriginalExtension(); 
        $request->image->move(public_path('images'), $fileName);
        }else{
            $fileName = $data ->image;
        }
            
        $data->room_id  = $request->input('room_id');
        $data->name  = $request->input('name');
        $data->room_type    = $request->input('room_type');
        $data->Total_member = $request->input('Total_member');
        $data->room_condition = $request->input('room_condition');
        $data->bed_count   = $request->input('bed_count');
        $data->washroom  = $request->input('washroom');
        $data->image     = $fileName;
        $data->save();

           
        return redirect()->route('room.index')->with('success', 'Staff created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        $room ->delete();
        return redirect()->route('room.index')->with('success', 'Staff created successfully.');
    }
}
