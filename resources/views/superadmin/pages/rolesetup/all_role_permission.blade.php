
@extends('layouts.app')

@section('content')
<style>
  .permission-badge {
    display: inline-block;
    background: #17a2b8;   /* info color */
    color: #fff;
    padding: 6px 12px;
    margin: 4px;           /* spacing between badges */
    border-radius: 25px;   /* round shape */
    font-size: 13px;
}

</style>

        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
             Role & Permission  List
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('superadmin/add/role/permission') }}" class="btn btn-outline-primary">Role & Permission Create</a></li>
              
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Role & Permission  List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
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
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $item->name }}</td>
                       <td>
                          @foreach($item->permissions as $prem)
                             <span class="permission-badge">{{$prem->name}}</span>
                          @endforeach


                        </td>
                        
                       
                    
                        <td>
                            <a href="{{url('superadmin/edit/role/permission',$item->id)}}" class="btn btn-outline-primary">Edit</a>
                            <!-- <a href="{{url('superadmin/delete/role/permission',$item->id)}}" class="btn btn-outline-danger" id="delete">Delete</a> -->
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