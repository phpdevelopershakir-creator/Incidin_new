
@extends('layouts.app')

@section('content')

        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              User List
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('superadmin/user/create')}}" class="btn btn-outline-primary">User Create</a></li>
              
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">User  List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
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
                        @foreach ($users as $user )
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->mobile }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->user_type }}</td>

                        <td>
                        @foreach($user->roles as $role)
                     <span class="badge badge-pill bg-danger">{{ $role->name }}</span>
                      @endforeach
                         
                        </td>
                        <td>
                        @if($user->status == 1)
									<span style="color:green">Active </span>
									@else
									<span style="color:red">Inactive</span>
									
                  @endif
                       
                        </td>
                       
                    
                        <td>
                            <a href="{{ route('superadmin.user.edit',$user->id) }}" class="btn btn-outline-primary">Edit</a>
                            <a href="{{ route('superadmin.user.delete',$user->id) }}" class="btn btn-outline-danger" id="delete">Delete</a>
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