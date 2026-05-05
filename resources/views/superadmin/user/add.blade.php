@extends('layouts.app')
@section('content')

<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              User Create

            </h3>
             <div class="col-sm-6" style="text-align: right">
            <a href="{{ url('superadmin/user/list') }}" class="btn btn-primary">User List</a>
          </div>
           
          </div>
          <div class="form-row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
        
                  <form class="forms-sample" action="{{ url('superadmin/user/store') }}" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Organisation Name*</label>
                          <input type="text" name="name" class="form-control form-control-sm" value="{{ old('name') }}" id="exampleInputUsername1"
                            placeholder="Organisation Name">
                            <p style="color:red">{{ $errors->first('name') }}</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Mobile No*</label>
                          <input type="text" name="mobile" class="form-control form-control-sm" value="{{ old('mobile') }}" id="exampleInputUsername1"
                            placeholder="Mobile No">
                            <p style="color:red">{{ $errors->first('mobile') }}</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Email Address *</label>
                          <input type="email" name="email" class="form-control form-control-sm" value="{{ old('email') }}" id="exampleInputUsername1"
                            placeholder="Email Address">
                            <p style="color:red">{{ $errors->first('email') }}</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Name of  Contact Person</label>
                          <input type="text" name="focal_person_name_one" class="form-control form-control-sm" value="{{ old('focal_person_name_one') }}" id="exampleInputUsername1"
                            placeholder="Name of  Contact Person">
                            <p style="color:red">{{ $errors->first('focal_person_name_one') }}</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Designation</label>
                          <input type="text" name="designation_one" class="form-control form-control-sm" value="{{ old('designation_one') }}" id="exampleInputUsername1"
                            placeholder="Designation">
                            <p style="color:red">{{ $errors->first('designation_one') }}</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Work Area</label>
                          <input type="text" name="work_area" class="form-control form-control-sm" value="{{ old('work_area') }}" id="exampleInputUsername1"
                            placeholder="Work Area">
                            <p style="color:red">{{ $errors->first('work_area') }}</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputUsername1">User Type</label>
                          <select name="user_type" id="" class="form-control" required="">
                          <option value="" disabled>User Type Select </option>
                          <option value="Ministry">Ministry</option>
                          <option value="Agency">Agency</option>
                          <option value="AgencyMoib">Agency Moib</option>
                          <option value="CTC">CTC</option>
                          <option value="NGO">NGO</option>
                          <option value="INGO">INGO</option>
                          <option value="UN">UN</option>
                        </select>
                            <p style="color:red">{{ $errors->first('user_type') }}</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Role  *</label>
                          <select class="form-control" name="roles" required="">
                        <option selected="" disabled="">Select Role</option>
                        @foreach ($roles as $role )
                        	<option value="{{$role->id}}">{{$role->name}}</option>
                        	
                          @endforeach
                        </select>
                            <p style="color:red">{{ $errors->first('name') }}</p>
                        </div>
                      </div>
                     
                      
                    </div>
                  
                  



                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
           
          
        
            
         
           
          </div>
        </div>

    


@endsection


   