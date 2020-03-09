@extends('cont.clayout')
 
@section('content')
    <!--<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Our Rooms</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('contact.create') }}"> Create New Room</a>
            </div>
        </div>
    </div>
    -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>First_Name</th>
            <th>Last_Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($conts as $contact)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $contact->First_Name }}</td>
            <td>{{ $contact->Last_Name}}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->phone }}</td>
            <td>{{ $contact->message}}</td>
            <td>
                <form action="{{ route('contact.destroy',$contact->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('contact.show',$contact->id) }}">Show</a>
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $conts->links() !!}
      
@endsection