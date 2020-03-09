@extends('rooms.roomlayout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Room</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('rooms.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Room_Type:</strong>
                {{ $room->room_type }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bed_Type:</strong>
                {{ $room->bed_type }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Room_number:</strong>
                {{ $room->room_number }}
            </div>
        </div>
    </div>
@endsection