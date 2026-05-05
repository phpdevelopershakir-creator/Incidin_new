
@extends('layouts.app')

@section('content')

        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
             Permission List
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('superadmin/add/permission') }}" class="btn btn-outline-primary">Permission Create</a></li>
              
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Permission List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Permission Name </th>
                            <th>Group Name</th>
                            <th>Action </th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach ($permissions as $value )
                        <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->group_name }}</td>
                        </td>
                       
                    
                        <td>
                            <a href="{{url('superadmin/edit/permission',$value->id)}}" class="btn btn-outline-primary">Edit</a>
                            <a href="{{url('superadmin/delete/permission',$value->id)}}" class="btn btn-outline-danger" id="delete">Delete</a>
                        </td>

                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection