
@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right">
            <a href="{{ url('superadmin/user/create') }}" class="btn btn-primary">Create New User</a>
          </div>
        </div>
      </div>
    </section>

 
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">



            <div class="card">
              <div class="card-header">
                <h3 class="card-title">User List All </h3>
              </div>
              <div class="card-body p-0">
                <table class="table table-sm">
                  <thead>
                    <tr>
                        <th>#</th>
                      <th>Name</th>
                      <th>Phone No.</th>
                      <th>Email Address</th>
                 
                      <th>Action </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $value )
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->mobile }}</td>
                        <td>{{ $value->email }}</td>
                       

                       
                    
                        <td>
                            <a href="{{route('superadmin.user.wish',$value->id)}}" class="btn btn-info">View</a>
                            
                        </td>



                      </tr>
                    @endforeach
                  </tbody>
                </table>
                <div style="padding: 10px; float:right">
                
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


@endsection