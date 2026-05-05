@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User Create</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Create</li>
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
               <a class="btn btn-success float-right btn-sm" href="{{ url('superadmin/user/list') }}"><i class="fa fa-plus-circle"></i>User List</a>
              </div>
          

                <div class="card-body">
       <form action="{{ url('superadmin/user/store') }}" method="post" class="forms-sample"  enctype="multipart/form-data">
                    @csrf
                  <div class="form-row">
                   
                      <div class="form-group col-md-4">
                        <label> Organisation Name *</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Organisation Name " require>
                        <p style="color:red">{{ $errors->first('name') }}</p>
                      </div>


                      <div class="form-group col-md-4">
                        <label> Mobile No.</label>
                        <input type="text" name="mobile" value="{{ old('mobile') }}"  class="form-control"  placeholder=" Mobile No">
                      </div>

                      <div class="form-group col-md-4">
                        <label> Email Address *</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email" require>
                        <p style="color:red">{{ $errors->first('email') }}</p>
                      </div>

                   
          
                      <div class="form-group col-md-4">
                        <label>Name of  Contact Person</label>
                        <input type="text" name="focal_person_name_one"  class="form-control"  placeholder=" Name of  Contact Person" value="{{ old('focal_person_name_one') }}">
                        
                      </div>
                      <div class="form-group col-md-4">
                        <label> Designation</label>
                        <input type="text" name="designation_one"  class="form-control"  placeholder=" Designation" value="{{ old('designation_one') }}">
                       
                      </div>

                      <div class="form-group col-md-4">
                        <label> Work Area</label>
                        <input type="text" name="work_area"  class="form-control" placeholder=" Work Area " value="{{ old('work_area') }}">
                      </div>


                      <div class="form-group col-md-4">
                        <label> User Type</label>
                        <select name="user_type" id="" class="form-control">
                          <option value="" disabled>User Type Select </option>
                          <option value="Ministry">Ministry</option>
                          <option value="Agency">Agency</option>
                          <option value="AgencyMoib">Agency Moib</option>
                          <option value="CTC">CTC</option>
                          <option value="NGO">NGO</option>
                          <option value="INGO">INGO</option>
                          <option value="UN">UN</option>
                        </select>
                      </div>




                      <div class="form-group col-md-4">
                        <label>Role *</label>
                        <select class="form-control" name="roles" required="">
                        <option selected="" disabled="">Select Role</option>
                        @foreach ($roles as $role )
                        	<option value="{{$role->id}}">{{$role->name}}</option>
                        	
                          @endforeach
                        </select>
                      </div>


                       </div>


                      
                       </div>
                    

                    


                   

                    <div class="form-group col-md-6">
                      <button type="submit" class="btn btn-primary">Submit</button>
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



@endsection


   