<?php

namespace App\Http\Controllers\Admin;

use App\Models\RoomType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class RoomTypeController extends Controller
{
    public function index()
    {
        $roomtype = RoomType::all();
        return view('admin.roomtype')->with('roomtype',$roomtype);
    }
    public function store(Request $request)
    {
        $roomtype = new RoomType;
        $roomtype->room_type_id= $request->input('room_type_id');
        $roomtype->room_type_name= $request->input('room_type_name');

        $roomtype->save();
        return redirect('/roomtype')->with('status','Data Added for RoomType');
    }
    public function edit($room_type_id)
    {
             $roomtype = RoomType::findOrFail($room_type_id);
            return view('admin.roomtype.edit')->with('roomtype',$roomtype);
    }
    public function update(Request $request,$room_type_id)
    {
        $roomtype = RoomType::findOrFail($room_type_id);
        $roomtype->room_type_id = $request->input('room_type_id');
        $roomtype->room_type_name = $request->input('room_type_name');
        $roomtype->update();
        return redirect('roomtype')->with('status','Data Updated for Roomtype');
    }
    public function delete($room_type_id)
    {
        $roomtype = RoomType::findOrFail($room_type_id);
        $roomtype->delete();
        return redirect('roomtype')->with('status','Data Delete for RoomType');
    }
}
