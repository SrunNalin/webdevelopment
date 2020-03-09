@extends('layouts.master')
    
@section('title')
    RoomType
@endsection

@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add More RoomType</h5><br/>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="/save-roomtype" method="post">
        {{ csrf_field()}}
      <div class="modal-body">
          <div class="form-group">
            <label for="roomtype_id" class="col-form-label">RoomType_ID:</label>
            <p><font color="red">RoomType ID must be unique</font></p>
            <input type="text" name="room_type_id"class="form-control" id="roomtype_id">
          </div>
          <div class="form-group">
            <label for="roomtype_name" class="col-form-label">RoomType_Name:</label>
            <input type="text" name="room_type_name" class="form-control" id="roomtype_name">
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
          <input type="hidden" id="delete_roomtype_id">
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
                <h4 class="card-title"> RoomType
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
                        RoomType_ID
                      </th>
                      <th>
                        RoomType_Name
                      </th>
                      <th>
                        Edit
                      </th>
                      <th>
                        Delete
                      </th>
                    </thead>
                    <tbody>
                      @foreach($roomtype as $data)
                      <tr>
                        <td>
                          {{$data->room_type_id}}
                        </td>
                        <td>
                        {{$data->room_type_name}}
                        </td>
                        <td>
                            <a href="{{url('roomtype/'.$data->room_type_id)}}" class="btn btn-success">Edit</a>
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
        $('#delete_roomtype_id').val(data[0]);
        $('#delete_modal_form').attr('action','/roomtype-delete/'+data[0]);
        $('#deletemodalpop').modal('show');
        });
      });
    </script>
@endsection