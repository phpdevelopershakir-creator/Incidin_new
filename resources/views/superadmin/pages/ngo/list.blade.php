
@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>NGo List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right">
            <a href="{{ url('superadmin/ngo/create') }}" class="btn btn-primary">Create New Ngo</a>
          </div>
        </div>
      </div>
    </section>

 
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
           
               
              </div>


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ngo List All</h3>
              </div>
              <div class="card-body p-0">
                <table class="table table-sm">
                  <thead>
                    <tr>
                        <th>#</th>
                      <th>Name of NGO</th>
                      <th>Dvision  Name</th>
                      <th>Email Address</th>
                      <th>Focaal Number No.</th>
                      <th>User Type</th>
                      <th>User Roll</th>
                      <th>Status</th>
                      <th>Action </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($ngos as $value )
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->division->name ?? ''  }} {{ $value->division->bn_name ?? ''  }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->focal_person_number_one }}</td>
                        <td>{{ $value->user_type }}</td>
                        <td>
                          @foreach($value->roles as $role)
                       <span class="badge badge-pill bg-danger">{{ $role->name }}</span>
                        @endforeach
                           
                          </td>

                          <td>@if ($value->status == 1)
                            <span class="btn btn-info">Active</span>
                             @else
                             <span class="btn btn-danger">InActive</span>
                             @endif</td>
                       <td>
                            <a href="{{ route('superadmin.ngo.edit',$value->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ route('superadmin.ngo.delete',$value->id) }}" class="btn btn-danger" id="delete">Delete</a>
                        </td>



                      </tr>
                    @endforeach
                  </tbody>
                </table>
                <div style="padding: 10px; float:right">
                    {!! $ngos->links() !!}
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


@endsection