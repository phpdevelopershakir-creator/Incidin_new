@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Agency Edit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Agency Edit</li>
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
      <form action="" method="post" class="forms-sample"  enctype="multipart/form-data">
              @csrf
            <div class="form-row">
      @php
      $ministies=DB::table('name_of_ministry')->get();
      @endphp                  
                <div class="form-group col-md-4">
                  <label>Name of Ministry *</label>
                  <select name="ministry_id" class="form-control" id="" require>
                  @foreach($ministies as $ministy)
                    
                  <option value="{{ $ministy->id }}" @if($ministy->id == $agency->ministry_id) selected @endif>{{ $ministy->name }} </option>
                  @endforeach
                  </select>
                  
                </div>
      
      
            <div class="form-group col-md-4">
              <label>Division/Department</label>
              <select name="division_id" class="form-control" id="">
              <option value="">Select Division</option>
           
              <option value="PSD" @if($agency->division_id == "PSD") selected @endif>PSD</option>
              <option value="SSD" @if($agency->division_id == "SSD") selected @endif>SSD</option>
                                     
              </select>
            </div>
      
      
                <div class="form-group col-md-4">
                  <label>Agency *</label>
                  <select name="agency" class="form-control" id="">
                      <option value="">Select An Agency</option>  
                      <option value="Police HQ" @if($agency->agency == "Police HQ") selected @endif>Police HQ</option>
                      <option value="BGB" @if($agency->agency == "BGB") selected @endif>BGB</option>
                      <option value="Coast Guard" @if($agency->agency == "Coast Guard") selected @endif>Coast Guard</option>
                      <option value="CID" @if($agency->agency == "CID") selected @endif>CID</option>
                      <option value="RAB" @if($agency->agency == "RAB") selected @endif>RAB</option>
                      <option value="PIB" @if($agency->agency == "PIB") selected @endif>PIB</option>
                      <option value="Ansar" @if($agency->agency == "Ansar") selected @endif>Ansar</option>
                  
    
                      
                      
                      
                  </select>
                </div>
      
               
      
                
      
      
      
                <div class="form-group col-md-3">
                  <label> Focal Person 1 Name  *</label>
                  <input type="text" class="form-control" name="focal_person_name_one"  value="{{ $agency->focal_person_name_one }}">
                 
                </div>
                <div class="form-group col-md-3">
                  <label>Focal Person 1 Designation </label>
                  <input type="text" name="designation_one"  class="form-control" value="{{ $agency->designation_one }}">
                </div>
                <div class="form-group col-md-3">
                  <label> Focal Person 1 Telephone/Mobile *</label>
                  <input type="text" name="focal_person_number_one" value="{{ $agency->focal_person_number_one }}"  class="form-control">
                 
                </div>
    
          
                <div class="form-group col-md-3">
                  <label> Focal Person 1 E-Mail</label>
                  <input type="text" name="email"  class="form-control" value="{{ $agency->email }}">
                  
                </div>
                <div class="form-group col-md-3">
                  <label>Focal Person 2 Name   </label>
                  <input type="text" name="focal_person_name_two"  class="form-control" value="{{ $agency->focal_person_name_two }}">
    
                </div>
                <div class="form-group col-md-3">
                  <label>Focal Person 2 Designation </label>
                  <input type="text" name="designation_two"  class="form-control"  value="{{ $agency->designation_two}}">
                </div>
                <div class="form-group col-md-3">
                  <label>Focal Person 2 Telephone/Mobile</label>
                  <input type="text" name="focal_person_number_two"  class="form-control"  value="{{ $agency->focal_person_number_two}}">
                </div>
    
                <div class="form-group col-md-3">
                  <label> Focal Person 2 E-Mail</label>
                  <input type="text" name="focal_person_email_two"  class="form-control"  value="{{ $agency->focal_person_email_two}}">
                </div>
    
                <div class="form-group col-md-3">
                  <label> Focal Person 3 Name </label>
                  <input type="text" name="focal_person_name_three" class="form-control" value="{{ $agency->focal_person_name_three}}">
               
                </div>
                <div class="form-group col-md-3">
                  <label> Focal person 3 Designation </label>
                  <input type="text" name="designation_three"  class="form-control"  value="{{ $agency->designation_three}}">
                </div>
    
                <div class="form-group col-md-3">
                  <label> Focal Person 3 Telephone/Mobile </label>
                  <input type="text" name="focal_person_number_three"  class="form-control"  value="{{ $agency->focal_person_number_three}}">
                </div>
                <div class="form-group col-md-3">
                  <label> Focal person 3 E-Mail </label>
                  <input type="email" name="focal_person_email_three"  class="form-control"  value="{{ $agency->focal_person_email_three}}">
                </div>
    
               
      
              
      
      
      
                
      
                  </div>
                  </div>
              
      
              
      
      
              
      
              <div class="form-group col-md-12">
                <button type="submit" class="float-right btn btn-primary">Update</button>
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


   