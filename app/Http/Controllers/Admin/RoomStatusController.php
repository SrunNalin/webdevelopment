<?php

namespace App\Http\Controllers\Admin;

use App\Models\RoomStatus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class RoomStatusController extends Controller
{
    public function index()
    {
        $roomstatus = RoomStatus::all();
        return view('admin.roomstatus')->with('roomstatus',$roomstatus);
    }
    public function store(Request $request)
    {
        $roomstatus = new RoomStatus;
        $roomstatus->room_status_id= $request->input('room_status_id');
        $roomstatus->room_status_name= $request->input('room_status_name');

        $roomstatus->save();
        return redirect('/roomstatus')->with('status','Data Added for Roomstatus');
    }
    public function edit($room_status_id)
    {
             $roomstatus = RoomStatus::findOrFail($room_status_id);
            return view('admin.roomstatus.edit')->with('roomstatus',$roomstatus);
    }
    public function update(Request $request,$room_status_id)
    {
        $roomstatus = RoomStatus::findOrFail($room_status_id);
        $roomstatus->room_status_id = $request->input('room_status_id');
        $roomstatus->room_status_name = $request->input('room_status_name');
        $roomstatus->update();
        return redirect('roomstatus')->with('status','Data Updated for Roomstatus');
    }
    public function delete($room_status_id)
    {
        $roomstatus = RoomStatus::findOrFail($room_status_id);
        $roomstatus->delete();
        return redirect('roomstatus')->with('status','Data Delete for Roomstatus');
    }
}
