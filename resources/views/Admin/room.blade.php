@extends('layouts.master')
    
@section('title')
    Room
@endsection

@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add More Room</h5><br/>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">Add
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="/save-room" method="post">
        {{ csrf_field()}}
      <div class="modal-body">
          <div class="form-group">
            <label for="room_id" class="col-form-label">Room_ID:</label>
            <p><font color="red">Room ID must be unique</font></p>
            <input type="text" name="room_id"class="form-control" id="room_id">
          </div>
          <div class="form-group">
            <label for="room_type_id" class="col-form-label">Room_Type_ID:</label>
            <input type="text" name="room_type_id" class="form-control" id="room_type_id">
          </div>
          <div class="form-group">
            <label for="room_status_id" class="col-form-label">Room_Status_ID:</label>
            <input type="text" name="room_status_id" class="form-control" id="room_status_id">
          </div>
          <div class="form-group">
            <label for="room_price" class="col-form-label">Room_Price:</label>
            <input type="text" name="room_price" class="form-control" id="room_price">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>
<div class="modal fade" id="deletemodalpop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="delete_modal_form" method="POST">
           {{csrf_field()}}
           {{method_field('delete')}}
      <div class="modal-body">
          <input type="hidden" id="delete_room_id">
          <h5> Are you sure ? You want to delete this data ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Yes. Delete it.</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Room
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add</button>
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
                        Room_ID
                      </th>
                      <th>
                        Room_Type_ID
                      </th>
                      <th>
                        Room_Status_ID
                      </th>
                      <th>
                        Room_Price
                      </th>
                      <th>
                        Edit
                      </th>
                      <th>
                        Delete
                      </th>
                    </thead>
                    <tbody>
                      @foreach($room as $data)
                      <tr>
                        <td>
                          {{$data->room_id}}
                        </td>
                        <td>
                        {{$data->room_type_id}}
                        </td>
                        <td>
                        {{$data->room_status_id}}
                        </td>
                        <td>
                        {{$data->room_price}}
                        </td>
                        <td>
                            <a href="{{url('room/'.$data->room_id)}}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                        <a href="javascript:void(0)" class="btn btn-danger deletebtn">Delete</a>
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
        $('#delete_room_id').val(data[0]);
        $('#delete_modal_form').attr('action','/room-delete/'+data[0]);
        $('#deletemodalpop').modal('show');
        });
      });
    </script>
@endsection