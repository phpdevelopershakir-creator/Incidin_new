@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">CTC Create</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">CTC  Create</li>
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
               <a class="btn btn-success float-right btn-sm" href="{{url('superadmin/ctc/list')}}"><i class="fa fa-plus-circle"></i>CTC  List</a>
              </div>
              @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                <div class="card-body">
       <form action="{{ url('superadmin/ctc/store') }}" method="post" class="forms-sample"  enctype="multipart/form-data">
                    @csrf
                  <div class="form-row">
                   
                      <div class="form-group col-md-4">
                        <label>Level of CTC*</label>
                        <input type="text" name="name" value="{{ old('name') }}"  class="form-control"  placeholder="District*">
                        
                      </div>

@php
$divisions=DB::table('divisions')->get();
@endphp
                      <div class="form-group col-md-4">
                        <label>Division</label>
                        
                        <select name="division_id" class="form-control" id="">
                       
                        <option value="">Select Division</option>
                          @foreach($divisions as $division)
                          
                            <option value="{{$division->id}}">{{$division->name}} {{$division->bn_name}}</option>
                         @endforeach
                        </select>
                      </div>

                 

                      <div class="form-group col-md-4">
                        <label for="exampleSelectGender"> District Name</label>
                          <select class="form-control" name="district_id"  id="exampleSelectGender">
                   
                          </select>
                        </div>

                    



              
                        
              
              
                  
              
              
                       
                        <div class="form-group col-md-3">
                          <label> Focal Person 1 Name  *</label>
                          <input type="text" name="focal_person_name_one" class="form-control" placeholder=" Focal Person 1 Name" value="{{ old('focal_person_name_one') }}">
                        
                        </div>
              
                        
              
                        <div class="form-group col-md-3">
                          <label>Focal Person 1 Designation  </label>
                          <input type="text" name="designation_one" placeholder="Focal Person 1 Designation"  class="form-control" value="{{ old('designation_one') }}" >
                          
                        </div>
              
              
                        <div class="form-group col-md-3">
                          <label>Focal Person 1 Telephone/Mobile  </label>
                          <input type="text" name="focal_person_number_one"  class="form-control"  placeholder="Focal Person 1 Telephone/Mobile " value="{{ old('focal_person_number_one') }}">
                          
                        </div>
                  
              
                        <div class="form-group col-md-3">
                          <label> Focal Person 1 E-Mail</label>
                          <input type="text" name="email"  class="form-control" placeholder="Focal Person 1 E-Mail" value="{{ old('email') }}">
                        </div>
              
                        <div class="form-group col-md-3">
                          <label>Focal Person 2 Name  </label>
                          <input type="text" name="focal_person_name_two"  class="form-control" placeholder="Focal Person 2 Name  " value="{{ old('focal_person_name_two') }}">
                        </div>
              
              
                        <div class="form-group col-md-3">
                          <label>Focal Person 2 Designation </label>
                          <input type="text" name="designation_two"  class="form-control" placeholder="Focal Person 2 Designation" value="{{ old('designation_two') }}">
                        </div>
                        <div class="form-group col-md-3">
                          <label>Focal Person 2 Telephone/Mobile </label>
                          <input type="text" name="focal_person_number_two"  class="form-control" placeholder="Focal Person 2 Telephone/Mobile " value="{{ old('focal_person_number_two') }}">
                        </div>
                        <div class="form-group col-md-3">
                          <label>Focal Person 2 E-Mail </label>
                          <input type="text" name="focal_person_email_two"  class="form-control" placeholder=" Focal Person 2 E-Mail " value="{{ old('focal_person_email_two') }}">
                        </div>
              
                        
              
                        <div class="form-group col-md-3">
                          <label>Focal Person 3 Name </label>
                          <input type="text" name="focal_person_name_three"  class="form-control" placeholder="Focal Person 3 Name " value="{{ old('focal_person_name_three') }}">
                        </div>
              
                        <div class="form-group col-md-3">
                          <label>Focal person 3 Designation  </label>
                          <input type="text" name="designation_three"  class="form-control" placeholder="Focal person 3 Designation  " value="{{ old('designation_three') }}">
                        </div>
              
              
              
                        
              
                        <div class="form-group col-md-3">
                          <label>Focal Person 3 Telephone/Mobile </label>
                          <input type="text" name="focal_person_number_three"  class="form-control" placeholder="Focal Person 3 Telephone/Mobile " value="{{ old('focal_person_number_three') }}">
                        </div>
              
                        <div class="form-group col-md-3">
                          <label>Focal person 3 E-Mail </label>
                          <input type="text" name="focal_person_email_three"  class="form-control" placeholder="" value="{{ old('focal_person_email_three') }}">
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
                    

                    


                   

                    <div class="form-group col-md-12">
                      <button type="submit" class="float-right btn btn-primary">Save</button>
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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
      </script>

      <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>

      <script type="text/javascript">
          $(document).ready(function() {
               $('select[name="division_id"]').on('change', function(){
                   var division_id = $(this).val();
                   if(division_id) {

                     $.ajax({
                         url: "{{  url('/get/division/') }}/"+division_id,
                         type:"GET",
                         dataType:"json",
                         success:function(data) {
                            var d =$('select[name="district_id"]').empty();
                               $.each(data, function(key, value){

                                   $('select[name="district_id"]').append('<option value="'+ value.id +'">' + value.name  +  value.bn_name + '</option>');

                               });

                         },
                        
                     });
                   } else {
                       alert('danger');
                   }

               });
           });

      </script>

<script type="text/javascript">
          $(document).ready(function() {
               $('select[name="upazilla_id"]').on('change', function(){
                   var upazilla_id = $(this).val();
                   if(upazilla_id) {

                     $.ajax({
                         url: "{{  url('/get/upazila/') }}/"+upazilla_id,
                         type:"GET",
                         dataType:"json",
                         success:function(data) {
                            var d =$('select[name="union_id"]').empty();
                               $.each(data, function(key, value){

                                   $('select[name="union_id"]').append('<option value="'+ value.id +'">' + value.name  +  value.bn_name + '</option>');

                               });

                         },
                        
                     });
                   } else {
                       alert('danger');
                   }

               });
           });

      </script>
@endsection


   