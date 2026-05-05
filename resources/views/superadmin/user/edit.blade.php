@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User  Edit</h1>
          </div>
          <div class="col-sm-6" style="text-align: right">
            <a href="{{ url('superadmin/user/list') }}" class="btn btn-primary">User List</a>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <form action="" method="POST">
                    @csrf

                    <div class="form-row">
                    <div class="form-group col-md-4">  
                    
                      <label for="exampleInputEmail1">Name *</label>
                      <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $getRecord->name }}" >
                  
                    </div>

                    <div class="form-group col-md-4">  
                    
                    <label for="exampleInputEmail1">Mobile No.</label>
                    <input type="text" name="mobile" class="form-control" id="exampleInputEmail1" value="{{ $getRecord->mobile }}" >
                
                  </div>

                  <div class="form-group col-md-4">  
                    
                    <label for="exampleInputEmail1">Email Address *</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ $getRecord->email }}" >
                
                  </div>

                      <div class="form-group col-md-4">
                        <label>Role Name  *</label>
                        <select class="form-control" name="roles" required="">
                        <option selected="" disabled="">Select Role</option>
                        @foreach ($roles as $role )
                        <option value="{{ $role->id }}" {{ $getRecord->hasRole($role->name) ? 'selected' : '' }} >{{ $role->name }}</option>
                        	
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group col-md-4">
                        <label> Name of  Contact Person</label>
                        <input type="text" name="focal_person_name_one"  class="form-control"   value="{{ $getRecord->focal_person_name_one }}">
                        
                      </div>

                      <div class="form-group col-md-4">
                        <label> Designation</label>
                        <input type="text" name="designation"  class="form-control"  placeholder=" Designation" value="{{ $getRecord->designation_one }}">
                        
                      </div>

                      <div class="form-group col-md-4">
                        <label> Organization</label>
                        <input type="text" name="organization"  class="form-control"  placeholder=" Organization" value="{{ $getRecord->organization }}">
                       
                      </div>

                      <div class="form-group col-md-4">
                        <label> Work Area</label>
                        <input type="text" name="work_area"  class="form-control" placeholder="Work Area " value="{{ $getRecord->work_area }}">
                     
                      </div>

                      <div class="form-group col-md-4">
                        <label>Status</label>
                        <select class="form-control" name="status" required="">
                        <option value="" disabled selected>---Select Status--</option>
						<option value="1" @if($getRecord->status == "1") selected @endif>Active</option>
						<option value="0" @if($getRecord->status == "0") selected @endif>InActive</option>

                        </select>
                      </div>

                      <div class="form-group col-md-4">
                        <label> User Type</label>
                        <select name="user_type" id="" class="form-control">
                          <option value="" disabled>User Type Select </option>
                          <option value="Ministry" @if($getRecord->user_type == "Ministry") selected @endif>Ministry</option>
                          <option value="Agency" @if($getRecord->user_type == "Agency") selected @endif>Agency</option>
                          <option value="AgencyMoib" @if($getRecord->user_type == "AgencyMoib") selected @endif>Agency Moib</option>
                          <option value="CTC" @if($getRecord->user_type == "CTC") selected @endif>CTC</option>
                          <option value="NGO" @if($getRecord->user_type == "NGO") selected @endif>NGO</option>
                          <option value="INGO" @if($getRecord->user_type == "INGO") selected @endif>INGO</option>
                          <option value="UN" @if($getRecord->user_type == "UN") selected @endif>UN</option>
                        
                        
                       
                 
                         
               
                        </select>
                      </div>




                

                   

                  </div>
    

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
  </div>

@endsection