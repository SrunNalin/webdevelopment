<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class RoomController extends Controller
{
    public function index()
    {
        $room = Room::all();
        return view('admin.room')->with('room',$room);
    }
    public function store(Request $request)
    {
        $room = new Room;
        $room->room_id= $request->input('room_id');
        $room->room_type_id= $request->input('room_type_id');
        $room->room_status_id= $request->input('room_status_id');
        $room->room_price= $request->input('room_price');

        $room->save();
        return redirect('/room')->with('status','Data Added for Room');
    }
    public function edit($room_id)
    {
             $room = Room::findOrFail($room_id);
            return view('admin.room.edit')->with('room',$room);
    }
    public function update(Request $request,$room_id)
    {
        $room = Room::findOrFail($room_id);
        $room->room_id = $request->input('room_id');
        $room->room_type_id = $request->input('room_type_id');
        $room->room_status_id = $request->input('room_status_id');
        $room->room_price = $request->input('room_price');

        $room->update();
        return redirect('room')->with('status','Data Updated for Room');
    }
    public function delete($room_id)
    {
        $room = Room::findOrFail($room_id);
        $room->delete();
        return redirect('room')->with('status','Data Delete for Room');
    }
}
