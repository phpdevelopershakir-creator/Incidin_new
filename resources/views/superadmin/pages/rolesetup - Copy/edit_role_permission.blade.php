@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Role & Permission  Create</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Role & Permission Create</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header">
               <a class="btn btn-success float-right btn-sm" href="{{ url('superadmin/all/role/permission') }}"><i class="fa fa-plus-circle"></i>Role & Permission List</a>
              </div>
          

                <div class="card-body">
                <h6 class="card-title">Edit Roles in Permission   </h6>

                                    <form id="myForm" method="POST" action="{{ route('superadmin.update.role.permission',$role->id) }}" class="forms-sample">
                                            @csrf


                                            <div class="form-group mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Roles Name   </label>
                                    <h3>{{ $role->name }}</h3>
                                        
                                            </div>


                                    <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" id="checkDefaultmain">
                                                <label class="form-check-label" for="checkDefaultmain">
                                                Permission All 
                                                </label>
                                            </div>

                                    <hr>

                                    @foreach($permission_groups as $group)
                                    <div class="row">
                                    <div class="col-3">

                                    @php
                                    $permissions = App\Models\User::getpermissionByGroupName($group->group_name)
                                    @endphp

                                        <div class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" id="checkDefault" {{ App\Models\User::roleHasPermissions($role,$permissions) ? 'checked' : '' }} >
                                                <label class="form-check-label" for="checkDefault">
                                                {{ $group->group_name }}
                                                </label>
                                            </div>

                                        
                                    </div>


                                        <div class="col-9">



                                    @foreach($permissions as $permission)
                                        <div class="form-check mb-2">

                                    <input type="checkbox" class="form-check-input" name="permission[]" id="checkDefault{{ $permission->id }}" value="{{ $permission->id }}" {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }} >

                                    <label class="form-check-label" for="checkDefault{{ $permission->id }}">
                                                {{ $permission->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                        <br>
                                    </div>
                                    
                                    </div> <!-- // End Row  -->
                                    @endforeach 

                    <div class="form-group col-md-6">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </div>
                </form>
                  </div>  
                </div>


           
            </div>
    
          </div>
        </div>


    </section>
    </div>
    <script type="text/javascript">
        
        $('#checkDefaultmain').click(function(){

          if ($(this).is(':checked')) {
            $('input[ type= checkbox]').prop('checked',true);
          }else{
             $('input[ type= checkbox]').prop('checked',false);
          }

        });
    </script> 


@endsection


   