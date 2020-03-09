@extends('layouts.master')
    
@section('title')
    Rgistered Roles
@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Rigistered Roles</h4>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Usertype
                      </th>
                      <th>
                        Edit
                      </th>
                      <th class="text-right">
                        Delete
                      </th>
                    </thead>
                    <tbody>
                    @foreach ($users as $row)
                      <tr>
                        <td>
                         {{$row->name}}
                        </td>
                        <td>
                          {{$row->email}}
                        </td>
                        <td>
                          {{$row->usertype}}
                        </td>
                        <td >
                          <a href="/role-edit/{{$row->id}}" class="btn btn-success">Edit</a>
                        </td>
                        <td class="text-right">
                          <form action="/role-delete/{{$row->id}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('delete')}}
                            <input type="hidden" name="id" value="{{$row->id}}">
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach            
@endsection

@section('scripts')

@endsection
