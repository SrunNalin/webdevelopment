@extends('layouts.master')
    
@section('title')
    Contact Us
@endsection

@section('content')
<div class="row">
<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Contact
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
                        Check 
                      </th>
                      <th>
                        Message
                      </th>
                      <th>
                        Show
                      </th>
                      <th>
                        Delete
                      </th>
                    </thead>
                    <tbody>
                    @foreach ($conts as $contact)
                    <tr>
                        <td>{{ $contact->First_Name }}</td>
                        <td>{{ $contact->Last_Name}}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->message}}</td>
                        <td>
                        <form>
                        <a class="btn btn-info" href="{{ route('contact.show',$contact->id) }}">Show</a>
                        </form>
                        </td>
                        <td>
                    <form action="{{ route('contact.destroy',$contact->id) }}" method="POST">
   
                        @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
      
                    
                </form>
                      </td>
                    </tr>
        @endforeach
                    </tbody>
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