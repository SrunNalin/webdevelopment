@extends('layouts.master')
    
@section('title')
    RoomStatus Edit
@endsection

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> RoomStatus - Edit Data </h4>
                <p><font color="red">RoomStatus_ID must be unique!</font></p>
                    <form action="{{url('roomstatus-update/'.$roomstatus->room_status_id)}}" method="post">
                    {{ csrf_field()}}
                    {{ method_field('PUT')}}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="roomstatus_id" class="col-form-label">RoomStatus_ID:</label>
                                <input type="text" name="room_status_id"class="form-control" value="{{$roomstatus->room_status_id}}">
                            </div>
                            <div class="form-group">
                                <label for="roomstatus_name" class="col-form-label">RoomStatus_Name:</label>
                                <input type="text" name="room_status_name" class="form-control" value="{{$roomstatus->room_status_name}}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="{{url('roomstatus')}}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection