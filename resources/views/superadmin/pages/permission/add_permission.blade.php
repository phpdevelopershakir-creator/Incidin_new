@extends('layouts.app')
@section('content')

<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
             Permission  Create
            </h3>
               <div class="col-sm-6" style="text-align: right">
            <a href="{{ url('superadmin/all/permission') }}" class="btn btn-primary">Permission List</a>
          </div>
           
          </div>
          <div class="form-row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
        
                  <form class="forms-sample" action="{{ url('superadmin/store/permission') }}" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Permission  Name <span style="color:red">*</span></span></label>
                          <input type="text" name="name" class="form-control form-control-sm" value="{{ old('name') }}" id="exampleInputUsername1"
                            placeholder="Permission  Name">
                            <p style="color:red">{{ $errors->first('name') }}</p>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputUsername1">User Type <span style="color:red">*</span></span></label>
                           <select class="form-control" name="group_name" required="">
                        <option value="" disabled selected>---Select Please--</option>
                          <option value="user">User Management</option>
                          <option value="case">Case Management</option>
                          <option value="role">Role & Permission</option>
                          <option value="dashboard">Dashboard </option>
                          <option value="report">Report </option>
                          <option value="registration">Registration </option>
                          <option value="location">Location </option>
                        </select>
                            <p style="color:red">{{ $errors->first('name') }}</p>
                        </div>
                      </div>
                      
                    </div>
                  
                

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    
                  </form>
                </div>
              </div>
            </div>
           
          
        
            
         
           
          </div>
        </div>

    


@endsection


   