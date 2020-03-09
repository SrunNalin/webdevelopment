@extends('layouts.master')
    
@section('title')
    Booking 
@endsection

@section('content')
<div class="row">
<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Booking
                </h4>
                @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
                @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
               <table id="dataTable" class="table">
                    <thead class=" text-primary">
                    <th>No</th>
                      <th>
                        First_Name
                      </th>
                      <th>
                        Last_Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Phone 
                      </th>
                      <th>
                        Check_in_date
                      </th>
                      <th>
                        Check_out_date
                      </th>
                      <th>
                        Room_type
                      </th>
                      <th>
                       Quantity
                      </th>
                      <th>
                        Adult
                      </th>
                      <th>
                        Day
                      </th>
                      <th>
                        Status
                      </th>
                      <th>
                        Action
                      </th>
                    </thead>
                    <tbody>
        @foreach ($books as $book)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{$book->first_name}}</td>
            <td>{{$book->last_name}}</td>
            <td>{{$book->email}}</td>
            <td>{{$book->phone}}</td>
            <td>{{ $book->check_in }}</td>
            <td>{{ $book->check_out }}</td>
            <td>{{ $book->room_type }}</td>
            <td>{{ $book->qaunity }}</td>
            <td>{{ $book->adult }}</td>
            <td>{{ $book->days }}</td>
            <td>{{ $book->status }}</td>
            <td>
                        <form>
                        <a class="btn btn-info" href="{{ route('book.show',$book->id) }}">Show</a>
                        </form>
                        </td>
                    <td>
                            <form>
                            <a class="btn btn-primary" href="{{ route('book.edit',$book->id) }}">Edit</a>
                            </form>
                        </td>
                    <td>
                    <form action="{{ route('book.destroy',$book->id) }}" method="POST">
                        @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                      </td>
        </tr>
        @endforeach
    </table>
    </div>
              </div>
            </div>   
@endsection
@section('scripts')
    <script>
        $(document).ready( function () {
    $('#dataTable').DataTable();
    $('#dataTable').on('click','.deletebtn',function(){
        $tr= $(this).closest('tr');
        var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();
        console.log(data);
        $('#delete_roomstatus_id').val(data[0]);
        $('#delete_modal_form').attr('action','/roomstatus-delete/'+data[0]);
        $('#deletemodalpop').modal('show');
        });
      });
    </script>
@endsection