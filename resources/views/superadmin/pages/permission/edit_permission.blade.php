@extends('layouts.app')
@section('content')

<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
             Permission  Edit
            </h3>
               <div class="col-sm-6" style="text-align: right">
            <a href="{{ url('superadmin/all/permission') }}" class="btn btn-primary">Permission List</a>
          </div>
           
          </div>
          <div class="form-row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
        
                  <form class="forms-sample" action="{{ url('superadmin/update/permission',$permission->id) }}" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Permission  Name <span style="color:red">*</span></span></label>
                          <input type="text" name="name" class="form-control form-control-sm" value="{{ old('name',$permission->name) }}" id="exampleInputUsername1"
                            placeholder="Permission  Name">
                            <p style="color:red">{{ $errors->first('name') }}</p>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputUsername1">User Type <span style="color:red">*</span></span></label>
                          <select class="form-control" name="group_name" required="">
                        <option value="" disabled selected>---Select Please--</option>
                        <option value="user" @if($permission->group_name == "user") selected @endif>User Management</option>
                        <option value="case" @if($permission->group_name == "case") selected @endif>Case Management</option>
                        <option value="role" @if($permission->group_name == "role") selected @endif>Role & Permission</option>
                        <option value="dashboard" @if($permission->group_name == "dashboard") selected @endif>Dashboard</option>
                        <option value="report" @if($permission->group_name == "report") selected @endif>Report</option>
                        <option value="registration" @if($permission->group_name == "registration") selected @endif>Registration</option>
                        <option value="location" @if($permission->group_name == "location") selected @endif>Location</option>
                    
                        </select>
                            <p style="color:red">{{ $errors->first('name') }}</p>
                        </div>
                      </div>
                      
                    </div>
                  
                

                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    
                  </form>
                </div>
              </div>
            </div>
           
          
        
            
         
           
          </div>
        </div>

    


@endsection


   