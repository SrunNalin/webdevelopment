@extends('layouts.master')
    
@section('title')
    Room Edit
@endsection

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Room - Edit Data </h4>
                <p><font color="red">Room_ID must be unique!</font></p>
                    <form action="{{url('room-update/'.$room->room_id)}}" method="post">
                    {{ csrf_field()}}
                    {{ method_field('PUT')}}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="room_id" class="col-form-label">Room_ID:</label>
                                <input type="text" name="room_id"class="form-control" value="{{$room->room_id}}">
                            </div>
                            <div class="form-group">
                                <label for="room_type_id" class="col-form-label">Room_Type_ID:</label>
                                <input type="text" name="room_type_id" class="form-control" value="{{$room->room_type_id}}">
                            </div>
                            <div class="form-group">
                                <label for="room_status_id" class="col-form-label">Room_Status_ID:</label>
                                <input type="text" name="room_status_id" class="form-control" value="{{$room->room_status_id}}">
                            </div>
                            <div class="form-group">
                                <label for="room_price" class="col-form-label">Room_Price:</label>
                                <input type="text" name="room_price" class="form-control" value="{{$room->room_price}}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="{{url('room')}}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection