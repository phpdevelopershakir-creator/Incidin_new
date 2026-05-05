
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
                  <h3 class="card-title">Search </h3>
                </div>
                <form action="" method="get">
                  <div class="card-body">
                    <div class="row">
                    <div class="form-group col-md-3">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" value="{{ Request::get('name') }}" name="name"  placeholder="Name">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="exampleInputPassword1">email</label>
                      <input type="email" class="form-control" value="{{ Request::get('email') }}" name="email"  placeholder="Email">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="exampleInputPassword1">Phone No.</label>
                        <input type="text" class="form-control" value="{{ Request::get('mobile') }}" name="mobile"  placeholder="Mobile">
                      </div>
                    <div class="form-group col-md-3">
                       <button type="submit" class="btn btn-success" style="margin-top: 30px;">Search</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">User List All (Total:{{ $getRecord->total() }})</h3>
              </div>
              <div class="card-body p-0">
                <table class="table table-sm">
                  <thead>
                    <tr>
                        <th>#</th>
                      <th>Name</th>
                      <th>Phone No.</th>
                      <th>Email Address</th>
                      <th>User Type</th>
                      <th>User Role</th>
                      <th>Status</th>
                      <th>Action </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($getRecord as $value )
                    <tr>
                        <td>{{ $loop->index }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->mobile }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->user_type }}</td>

                        <td>
                        @foreach($value->roles as $role)
                     <span class="badge badge-pill bg-danger">{{ $role->name }}</span>
                      @endforeach
                         
                        </td>
                        <td>
                        @if($value->status == 1)
									<span style="color:green">Active </span>
									@else
									<span style="color:red">Inactive</span>
									
                  @endif
                       
                        </td>
                       
                    
                        <td>
                            <a href="{{ route('superadmin.user.edit',$value->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ route('superadmin.user.delete',$value->id) }}" class="btn btn-danger" id="delete">Delete</a>
                        </td>



                      </tr>
                    @endforeach
                  </tbody>
                </table>
                <div style="padding: 10px; float:right">
                    {!! $getRecord->links() !!}
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


@endsection