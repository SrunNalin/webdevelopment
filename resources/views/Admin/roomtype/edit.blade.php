@extends('layouts.master')
    
@section('title')
    RoomType Edit
@endsection

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> RoomType - Edit Data </h4>
                <p><font color="red">RoomType_ID must be unique!</font></p>
                    <form action="{{url('roomtype-update/'.$roomtype->room_type_id)}}" method="post">
                    {{ csrf_field()}}
                    {{ method_field('PUT')}}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="roomtype_id" class="col-form-label">RoomType_ID:</label>
                                <input type="text" name="room_type_id"class="form-control" value="{{$roomtype->room_type_id}}">
                            </div>
                            <div class="form-group">
                                <label for="roomtype_name" class="col-form-label">RoomType_Name:</label>
                                <input type="text" name="room_type_name" class="form-control" value="{{$roomtype->room_type_name}}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="{{url('roomtype')}}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection