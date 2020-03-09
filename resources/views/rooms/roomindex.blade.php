@extends('rooms.roomlayout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Our Rooms</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('rooms.create') }}"> Create New Room</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Room_Type</th>
            <th>Bed_Type</th>
            <th>Room_Number</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($rooms as $room)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $room->room_type }}</td>
            <td>{{ $room->bed_type }}</td>
            <td>{{ $room->room_number }}</td>
            <td>
                <form action="{{ route('rooms.destroy',$room->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('rooms.show',$room->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('rooms.edit',$room->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $rooms->links() !!}
      
@endsection