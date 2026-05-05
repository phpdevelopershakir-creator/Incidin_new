
@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Role & Permission  List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right">
            <a href="{{ url('superadmin/add/role/permission') }}" class="btn btn-primary">Role & Permission Create</a>
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
                      <th>Role Name</th>
                      <th>Role & Permission</th>
                
                      <th>Action </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($rolepermissions as $item )
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                          @foreach($item->permissions as $prem)
                          <span class="badge bg-danger">{{$prem->name}}</span>
                          
                          @endforeach


                        </td>
      
                
                       
                    
                        <td>
                            <a href="{{url('superadmin/edit/role/permission',$item->id)}}" class="btn btn-info">Edit</a>
                            <a href="{{url('superadmin/delete/role/permission',$item->id)}}" class="btn btn-danger" id="delete">Delete</a>
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