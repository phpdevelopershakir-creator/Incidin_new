@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Change Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Change Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>



    <!-- ministry profile -->
    @if(auth()->user()->user_type =="Ministry")
@php
$id=Auth::user()->id;
$editData =App\Models\User::find($id);

@endphp
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card">
         


            <div class="card-body">
           <form action="{{url('ministry/profile') }}" method="post" class="forms-sample"  enctype="multipart/form-data">
                @csrf
              <div class="form-row">
@php
$ministies=DB::table('name_of_ministry')->get();
@endphp
                  <div class="form-group col-md-4">
                    <label>Name of Ministry *</label>
                    <select name="ministry_id" class="form-control" id="">
                    @foreach($ministies as $ministy)
                      
                    <option value="{{ $ministy->id }}" @if($ministy->id == $editData->ministry_id) selected @endif>{{ $ministy->name }} </option> 
                   @endforeach
                    </select>
                    
                  </div>


                  <div class="form-group col-md-4">
                    <label>Division/Department</label>
                    <select name="division_id" class="form-control" id="">
                    <option value="">Select Division</option>
                    <option value="PSD" @if($editData->division_id == "PSD") selected @endif>PSD</option>
                    <option value="SSD" @if($editData->division_id == "SSD") selected @endif>SSD</option>
                          
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                  
                  </div>
                 

                  <div class="form-group col-md-3">
                    <label> Focal Person 1 Name  *</label>
                    <input type="text" class="form-control" name="focal_person_name_one"  value="{{ $editData->focal_person_name_one }}">
                   
                  </div>
                  <div class="form-group col-md-3">
                    <label>Focal Person 1 Designation </label>
                    <input type="text" name="designation_one"  class="form-control" value="{{ $editData->designation_one }}">
                  </div>
                  <div class="form-group col-md-3">
                    <label> Focal Person 1 Telephone/Mobile *</label>
                    <input type="text" name="focal_person_number_one" value="{{ $editData->focal_person_number_one }}"  class="form-control">
                   
                  </div>

            
                  <div class="form-group col-md-3">
                    <label> Focal Person 1 E-Mail</label>
                    <input type="text" name="email"  class="form-control"   value="{{ $editData->email }}">
                    
                  </div>
                  <div class="form-group col-md-3">
                    <label>Focal Person 2 Name   </label>
                    <input type="text" name="focal_person_name_two"  class="form-control" value="{{ $editData->focal_person_name_two }}">
      
                  </div>
                  <div class="form-group col-md-3">
                    <label>Focal Person 2 Designation </label>
                    <input type="text" name="designation_two"  class="form-control"  value="{{ $editData->designation_two}}">
                  </div>
                  <div class="form-group col-md-3">
                    <label>Focal Person 2 Telephone/Mobile</label>
                    <input type="text" name="focal_person_number_two"  class="form-control"  value="{{ $editData->focal_person_number_two}}">
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal Person 2 E-Mail</label>
                    <input type="text" name="focal_person_email_two"  class="form-control"  value="{{ $editData->focal_person_email_two}}">
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal Person 3 Name </label>
                    <input type="text" name="focal_person_name_three" class="form-control" value="{{ $editData->focal_person_name_three}}">
                 
                  </div>
                  <div class="form-group col-md-3">
                    <label> Focal person 3 Designation </label>
                    <input type="text" name="designation_three"  class="form-control"  value="{{ $editData->designation_three}}">
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal Person 3 Telephone/Mobile </label>
                    <input type="text" name="focal_person_number_three"  class="form-control"  value="{{ $editData->focal_person_number_three}}">
                  </div>
                  <div class="form-group col-md-3">
                    <label> Focal person 3 E-Mail </label>
                    <input type="email" name="focal_person_email_three"  class="form-control"  value="{{ $editData->focal_person_email_three}}">
                  </div>

                  
               
                   </div>
                   </div>
                
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary  float-right">Update</button>
                </div>
              </div>
            </form>
              </div>  
            </div>


       
        </div>

      </div>
    </div>


</section>
@endif

@if(auth()->user()->user_type =="Agency")
@php
$id=Auth::user()->id;
$editData =App\Models\User::find($id);

@endphp


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
  <form action="{{ url('agency/profile') }}" method="post" class="forms-sample"  enctype="multipart/form-data">
          @csrf
        <div class="form-row">
  @php
  $ministies=DB::table('name_of_ministry')->get();
  @endphp                  
            <div class="form-group col-md-4">
              <label>Name of Ministry *</label>
              <select name="ministry_id" class="form-control" id="" require>
              @foreach($ministies as $ministy)
                
              <option value="{{ $ministy->id }}" @if($ministy->id == $editData->ministry_id) selected @endif>{{ $ministy->name }} </option>
              @endforeach
              </select>
              
            </div>
  
  
        <div class="form-group col-md-4">
          <label>Division/Department</label>
          <select name="division_id" class="form-control" id="">
          <option value="">Select Division</option>
       
          <option value="PSD" @if($editData->division_id == "PSD") selected @endif>PSD</option>
          <option value="SSD" @if($editData->division_id == "SSD") selected @endif>SSD</option>
                                 
          </select>
        </div>
  
  
            <div class="form-group col-md-4">
              <label>Agency *</label>
              <select name="agency" class="form-control" id="">
                  <option value="">Select An Agency</option>  
                  <option value="Police HQ" @if($editData->agency == "Police HQ") selected @endif>Police HQ</option>
                  <option value="BGB" @if($editData->agency == "BGB") selected @endif>BGB</option>
                  <option value="Coast Guard" @if($editData->agency == "Coast Guard") selected @endif>Coast Guard</option>
                  <option value="CID" @if($editData->agency == "CID") selected @endif>CID</option>
                  <option value="RAB" @if($editData->agency == "RAB") selected @endif>RAB</option>
                  <option value="PIB" @if($editData->agency == "PIB") selected @endif>PIB</option>
                  <option value="Ansar" @if($editData->agency == "Ansar") selected @endif>Ansar</option>
              

                  
                  
                  
              </select>
            </div>
  
           
  
            
  
  
  
            <div class="form-group col-md-3">
              <label> Focal Person 1 Name  *</label>
              <input type="text" class="form-control" name="focal_person_name_one"  value="{{ $editData->focal_person_name_one }}">
             
            </div>
            <div class="form-group col-md-3">
              <label>Focal Person 1 Designation </label>
              <input type="text" name="designation_one"  class="form-control" value="{{ $editData->designation_one }}">
            </div>
            <div class="form-group col-md-3">
              <label> Focal Person 1 Telephone/Mobile *</label>
              <input type="text" name="focal_person_number_one" value="{{ $editData->focal_person_number_one }}"  class="form-control">
             
            </div>

      
            <div class="form-group col-md-3">
              <label> Focal Person 1 E-Mail</label>
              <input type="text" name="email"  class="form-control"   value="{{ $editData->email }}">
              
            </div>
            <div class="form-group col-md-3">
              <label>Focal Person 2 Name   </label>
              <input type="text" name="focal_person_name_two"  class="form-control" value="{{ $editData->focal_person_name_two }}">

            </div>
            <div class="form-group col-md-3">
              <label>Focal Person 2 Designation </label>
              <input type="text" name="designation_two"  class="form-control"  value="{{ $editData->designation_two}}">
            </div>
            <div class="form-group col-md-3">
              <label>Focal Person 2 Telephone/Mobile</label>
              <input type="text" name="focal_person_number_two"  class="form-control"  value="{{ $editData->focal_person_number_two}}">
            </div>

            <div class="form-group col-md-3">
              <label> Focal Person 2 E-Mail</label>
              <input type="text" name="focal_person_email_two"  class="form-control"  value="{{ $editData->focal_person_email_two}}">
            </div>

            <div class="form-group col-md-3">
              <label> Focal Person 3 Name </label>
              <input type="text" name="focal_person_name_three" class="form-control" value="{{ $editData->focal_person_name_three}}">
           
            </div>
            <div class="form-group col-md-3">
              <label> Focal person 3 Designation </label>
              <input type="text" name="designation_three"  class="form-control"  value="{{ $editData->designation_three}}">
            </div>

            <div class="form-group col-md-3">
              <label> Focal Person 3 Telephone/Mobile </label>
              <input type="text" name="focal_person_number_three"  class="form-control"  value="{{ $editData->focal_person_number_three}}">
            </div>
            <div class="form-group col-md-3">
              <label> Focal person 3 E-Mail </label>
              <input type="email" name="focal_person_email_three"  class="form-control"  value="{{ $editData->focal_person_email_three}}">
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
@endif

@if(auth()->user()->user_type =="AgencyMoib")
@php
$id=Auth::user()->id;
$editData =App\Models\User::find($id);

@endphp

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card">
          <div class="card-header">
           <a class="btn btn-success float-right btn-sm" href="{{route('superadmin.agencymoib.list')}}"><i class="fa fa-plus-circle"></i>Agency Moib List</a>
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
   <form action="{{ url('agencymoib/profile') }}" method="post" class="forms-sample"  enctype="multipart/form-data">
                @csrf
              <div class="form-row">
@php
$ministies=DB::table('name_of_ministry')->get();
@endphp            
<div class="form-group col-md-4">
  <label>Name of Ministry *</label>
  <select name="ministry_id" class="form-control" id="" require>
  @foreach($ministies as $ministy)
    
  <option value="{{ $ministy->id }}" @if($ministy->id == $editData->ministry_id) selected @endif>{{ $ministy->name }} </option>
  @endforeach
  </select>
  
</div>

         
<div class="form-group col-md-4">
  <label>Division/Department</label>
  <select name="division_id" class="form-control" id="">
  <option value="">Select Division</option>

  <option value="PSD" @if($editData->division_id == "PSD") selected @endif>PSD</option>
  <option value="SSD" @if($editData->division_id == "SSD") selected @endif>SSD</option>
                         
  </select>
</div>

                  <div class="form-group col-md-4">
                    <label> Agency *</label>
                    <select name="agency" class="form-control" id="">
                    <option value="">Select An Agency</option>       
                       
                        <option value="Bangladesh Betar" @if($editData->agency == "Bangladesh Betar") selected @endif>Bangladesh Betar</option>
                        <option value="Bangladesh Television" @if($editData->agency == "Bangladesh Television") selected @endif>Bangladesh Television</option>

                    </select>
                  </div>





                  
                 
      
            

                  <div class="form-group col-md-3">
                    <label> Focal Person 1 Name  *</label>
                    <input type="text" class="form-control" name="focal_person_name_one"  value="{{ $editData->focal_person_name_one }}">
                   
                  </div>
                  <div class="form-group col-md-3">
                    <label>Focal Person 1 Designation </label>
                    <input type="text" name="designation_one"  class="form-control" value="{{ $editData->designation_one }}">
                  </div>
                  <div class="form-group col-md-3">
                    <label> Focal Person 1 Telephone/Mobile *</label>
                    <input type="text" name="focal_person_number_one" value="{{ $editData->focal_person_number_one }}"  class="form-control">
                   
                  </div>
      
            
                  <div class="form-group col-md-3">
                    <label> Focal Person 1 E-Mail</label>
                    <input type="text" name="email"  class="form-control"   value="{{ $editData->email }}">
                    
                  </div>
                  <div class="form-group col-md-3">
                    <label>Focal Person 2 Name   </label>
                    <input type="text" name="focal_person_name_two"  class="form-control" value="{{ $editData->focal_person_name_two }}">
      
                  </div>
                  <div class="form-group col-md-3">
                    <label>Focal Person 2 Designation </label>
                    <input type="text" name="designation_two"  class="form-control"  value="{{ $editData->designation_two}}">
                  </div>
                  <div class="form-group col-md-3">
                    <label>Focal Person 2 Telephone/Mobile</label>
                    <input type="text" name="focal_person_number_two"  class="form-control"  value="{{ $editData->focal_person_number_two}}">
                  </div>
      
                  <div class="form-group col-md-3">
                    <label> Focal Person 2 E-Mail</label>
                    <input type="text" name="focal_person_email_two"  class="form-control"  value="{{ $editData->focal_person_email_two}}">
                  </div>
      
                  <div class="form-group col-md-3">
                    <label> Focal Person 3 Name </label>
                    <input type="text" name="focal_person_name_three" class="form-control" value="{{ $editData->focal_person_name_three}}">
                 
                  </div>
                  <div class="form-group col-md-3">
                    <label> Focal person 3 Designation </label>
                    <input type="text" name="designation_three"  class="form-control"  value="{{ $editData->designation_three}}">
                  </div>
      
                  <div class="form-group col-md-3">
                    <label> Focal Person 3 Telephone/Mobile </label>
                    <input type="text" name="focal_person_number_three"  class="form-control"  value="{{ $editData->focal_person_number_three}}">
                  </div>
                  <div class="form-group col-md-3">
                    <label> Focal person 3 E-Mail </label>
                    <input type="email" name="focal_person_email_three"  class="form-control"  value="{{ $editData->focal_person_email_three}}">
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
@endif

@if(auth()->user()->user_type =="CTC")
@php
$id=Auth::user()->id;
$editData =App\Models\User::find($id);

@endphp

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
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
              <form action="{{ url('ctc/profile') }}" method="post" class="forms-sample"  enctype="multipart/form-data">
                @csrf
              <div class="form-row">
               
                  <div class="form-group col-md-4">
                    <label>Level of CTC*</label>
                    <input type="text" name="name"   class="form-control" value="{{$editData->name }}">
                    
                  </div>

@php
$divisions=DB::table('divisions')->get();
@endphp
                  <div class="form-group col-md-4">
                    <label>Division</label>
                    
                    <select name="division_id" class="form-control" id="">
                   
                    <option value="">Select Division</option>
                      @foreach($divisions as $division)
                      <option value="{{ $division->id }}" @if($division->id == $editData->division_id) selected @endif>{{ $division->name }} {{$division->bn_name}}</option>

                     @endforeach
                    </select>
                  </div>

                  @php
                  $districs=DB::table('districs')->get();
                  @endphp

                  <div class="form-group col-md-4">
                    <label for="exampleSelectGender"> District Name</label>
                      <select class="form-control" name="district_id"  id="exampleSelectGender">
                        @foreach($districs as $distric)
                        <option value="{{ $distric->id }}" @if($distric->id == $editData->district_id) selected @endif>{{ $distric->name }} {{$distric->bn_name}}</option>
  
                       @endforeach
                      </select>
                    </div>

                 
                  
                    
                  
                




                  <div class="form-group col-md-3">
                    <label> Focal Person 1 Name  *</label>
                    <input type="text" class="form-control" name="focal_person_name_one"  value="{{ $editData->focal_person_name_one }}">
                   
                  </div>


                  <div class="form-group col-md-3">
                    <label>Focal Person 1 Designation </label>
                    <input type="text" name="designation_one"  class="form-control" value="{{ $editData->designation_one }}">
        
                  </div>

                  <div class="form-group col-md-3">
                    <label>Focal Person 1 Telephone/Mobile  </label>
                    <input type="text" name="focal_person_number_one"   class="form-control" value="{{ $editData->focal_person_number_one }}">
        
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal Person 1 E-Mail  </label>
                    <input type="text" name="email"   class="form-control" value="{{ $editData->email }}">
        
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal Person 2 Name </label>
                    <input type="text" name="focal_person_name_two"  class="form-control" value="{{ $editData->focal_person_name_two }}">
                  
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal Person 2 Designation </label>
                    <input type="text" name="designation_two"   class="form-control" value="{{ $editData->designation_two }}">
                  
                  </div>
               
            

                  <div class="form-group col-md-3">
                    <label>Focal Person 2 Telephone/Mobile,  </label>
                    <input type="text" name="focal_person_number_two"  class="form-control"  value="{{ $editData->focal_person_number_two }}">
                  </div>

                  <div class="form-group col-md-3">
                    <label>Focal Person 2 E-Mail  </label>
                    <input type="email" name="focal_person_email_two"  class="form-control"  value="{{ $editData->focal_person_email_two }}">
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal Person 3 Name </label>
                    <input type="text" name="focal_person_name_three" class="form-control" value="{{ $editData->focal_person_name_three }}">
                   
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal person 3 Designation  </label>
                    <input type="text" name="designation_three" class="form-control" value="{{ $editData->designation_three }}">
                   
                  </div>
                

                  <div class="form-group col-md-3">
                    <label>Focal Person 3 Telephone/Mobile </label>
                    <input type="text" name="focal_person_number_three"  class="form-control"  value="{{ $editData->focal_person_number_three }}">
                  </div>

                  <div class="form-group col-md-3">
                    <label>Focal person 3 E-Mail </label>
                    <input type="text" name="focal_person_email_three"  class="form-control"  value="{{ $editData->focal_person_email_three }}">
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

@endif

@if(auth()->user()->user_type =="INGO")
@php
$id=Auth::user()->id;
$editData =App\Models\User::find($id);

@endphp


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
   <form action="{{ url('ingo/profile') }}" method="post" class="forms-sample"  enctype="multipart/form-data">
                @csrf
              <div class="form-row">
               
                  <div class="form-group col-md-4">
                    <label>Name of INGO*</label>
                    <select name="name" id="" class="form-control">
                      <option value="WI FSTIP" @if($editData->name == "WI FSTIP") selected @endif>WI FSTIP</option>
                      <option value="WI Ashshash" @if($editData->name == "WI Ashshash") selected @endif>WI Ashshash</option>
                      <option value="JC" @if($editData->name == "JC") selected @endif>JC</option>
                      
                    </select>
                    
                  </div>
                   @php
$divisions=DB::table('divisions')->get();
@endphp

                  <div class="form-group col-md-4">
                    <label>Division</label>
                    
                    <select name="division_id" class="form-control" id="">

                    <option value="">Select Division</option>
                      @foreach($divisions as $division)
                      <option value="{{ $division->id }}" @if($division->id == $editData->division_id) selected @endif>{{ $division->name }} {{$division->bn_name}}</option>

                     @endforeach
                    </select>
                  </div>
                  @php
                  $districs=DB::table('districs')->get();
                  @endphp
                  <div class="form-group col-md-4">
                    <label>District Name</label>
                    
                  
                      <select class="form-control" name="district_id"  id="exampleSelectGender">
                        @foreach($districs as $distric)
                        <option value="{{ $distric->id }}" @if($distric->id == $editData->district_id) selected @endif>{{ $distric->name }} {{$distric->bn_name}}</option>
  
                       @endforeach
                      </select>
                    
                  </div>

                 
                


                  <div class="form-group col-md-3">
                    <label> Focal Person 1 Name  *</label>
                    <input type="text" class="form-control" name="focal_person_name_one"  value="{{ $editData->focal_person_name_one }}">
                   
                  </div>


                  <div class="form-group col-md-3">
                    <label>Focal Person 1 Designation </label>
                    <input type="text" name="designation_one"  class="form-control" value="{{ $editData->designation_one }}">
        
                  </div>

                  <div class="form-group col-md-3">
                    <label>Focal Person 1 Telephone/Mobile  </label>
                    <input type="text" name="focal_person_number_one"   class="form-control" value="{{ $editData->focal_person_number_one }}">
        
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal Person 1 E-Mail  </label>
                    <input type="text" name="email"   class="form-control" value="{{ $editData->email }}">
        
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal Person 2 Name </label>
                    <input type="text" name="focal_person_name_two"  class="form-control" value="{{ $editData->focal_person_name_two }}">
                  
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal Person 2 Designation </label>
                    <input type="text" name="designation_two"   class="form-control" value="{{ $editData->designation_two }}">
                  
                  </div>
               
            

                  <div class="form-group col-md-3">
                    <label>Focal Person 2 Telephone/Mobile,  </label>
                    <input type="text" name="focal_person_number_two"  class="form-control"  value="{{ $editData->focal_person_number_two }}">
                  </div>

                  <div class="form-group col-md-3">
                    <label>Focal Person 2 E-Mail  </label>
                    <input type="email" name="focal_person_email_two"  class="form-control"  value="{{ $editData->focal_person_email_two }}">
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal Person 3 Name </label>
                    <input type="text" name="focal_person_name_three" class="form-control" value="{{ $editData->focal_person_name_three }}">
                   
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal person 3 Designation  </label>
                    <input type="text" name="designation_three" class="form-control" value="{{ $editData->designation_three }}">
                   
                  </div>
                

                  <div class="form-group col-md-3">
                    <label>Focal Person 3 Telephone/Mobile </label>
                    <input type="text" name="focal_person_number_three"  class="form-control"  value="{{ $editData->focal_person_number_three }}">
                  </div>

                  <div class="form-group col-md-3">
                    <label>Focal person 3 E-Mail </label>
                    <input type="text" name="focal_person_email_three"  class="form-control"  value="{{ $editData->focal_person_email_three }}">
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
@endif
@if(auth()->user()->user_type =="Ministry")
@php
$id=Auth::user()->id;
$editData =App\Models\User::find($id);

@endphp
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card">
         


            <div class="card-body">
           <form action="{{url('ministry/profile') }}" method="post" class="forms-sample"  enctype="multipart/form-data">
                @csrf
              <div class="form-row">
@php
$ministies=DB::table('name_of_ministry')->get();
@endphp
                  <div class="form-group col-md-4">
                    <label>Name of Ministry *</label>
                    <select name="ministry_id" class="form-control" id="">
                    @foreach($ministies as $ministy)
                      
                    <option value="{{ $ministy->id }}" @if($ministy->id == $editData->ministry_id) selected @endif>{{ $ministy->name }} </option> 
                   @endforeach
                    </select>
                    
                  </div>


                  <div class="form-group col-md-4">
                    <label>Division/Department</label>
                    <select name="division_id" class="form-control" id="">
                    <option value="">Select Division</option>
                    <option value="PSD" @if($editData->division_id == "PSD") selected @endif>PSD</option>
                    <option value="SSD" @if($editData->division_id == "SSD") selected @endif>SSD</option>
                          
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                  
                  </div>
                 

                  <div class="form-group col-md-3">
                    <label> Focal Person 1 Name  *</label>
                    <input type="text" class="form-control" name="focal_person_name_one"  value="{{ $editData->focal_person_name_one }}">
                   
                  </div>
                  <div class="form-group col-md-3">
                    <label>Focal Person 1 Designation </label>
                    <input type="text" name="designation_one"  class="form-control" value="{{ $editData->designation_one }}">
                  </div>
                  <div class="form-group col-md-3">
                    <label> Focal Person 1 Telephone/Mobile *</label>
                    <input type="text" name="focal_person_number_one" value="{{ $editData->focal_person_number_one }}"  class="form-control">
                   
                  </div>

            
                  <div class="form-group col-md-3">
                    <label> Focal Person 1 E-Mail</label>
                    <input type="text" name="email"  class="form-control"   value="{{ $editData->email }}">
                    
                  </div>
                  <div class="form-group col-md-3">
                    <label>Focal Person 2 Name   </label>
                    <input type="text" name="focal_person_name_two"  class="form-control" value="{{ $editData->focal_person_name_two }}">
      
                  </div>
                  <div class="form-group col-md-3">
                    <label>Focal Person 2 Designation </label>
                    <input type="text" name="designation_two"  class="form-control"  value="{{ $editData->designation_two}}">
                  </div>
                  <div class="form-group col-md-3">
                    <label>Focal Person 2 Telephone/Mobile</label>
                    <input type="text" name="focal_person_number_two"  class="form-control"  value="{{ $editData->focal_person_number_two}}">
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal Person 2 E-Mail</label>
                    <input type="text" name="focal_person_email_two"  class="form-control"  value="{{ $editData->focal_person_email_two}}">
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal Person 3 Name </label>
                    <input type="text" name="focal_person_name_three" class="form-control" value="{{ $editData->focal_person_name_three}}">
                 
                  </div>
                  <div class="form-group col-md-3">
                    <label> Focal person 3 Designation </label>
                    <input type="text" name="designation_three"  class="form-control"  value="{{ $editData->designation_three}}">
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal Person 3 Telephone/Mobile </label>
                    <input type="text" name="focal_person_number_three"  class="form-control"  value="{{ $editData->focal_person_number_three}}">
                  </div>
                  <div class="form-group col-md-3">
                    <label> Focal person 3 E-Mail </label>
                    <input type="email" name="focal_person_email_three"  class="form-control"  value="{{ $editData->focal_person_email_three}}">
                  </div>

                  
               
                   </div>
                   </div>
                
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary  float-right">Update</button>
                </div>
              </div>
            </form>
              </div>  
            </div>


       
        </div>

      </div>
    </div>


</section>
@endif

@if(auth()->user()->user_type =="NGO")
@php
$id=Auth::user()->id;
$editData =App\Models\User::find($id);

@endphp
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
   <form action="{{ url('ngo/profile') }}" method="post" class="forms-sample"  enctype="multipart/form-data">
                @csrf
              <div class="form-row">
               
                  <div class="form-group col-md-4">
                    <label>Name of NGO*</label>
                    <select name="name" id="" class="form-control">
                      <option value="PSD" @if($editData->name == "INCIDIN Bangladesh") selected @endif>INCIDIN Bangladesh</option>
                      <option value="DAM" @if($editData->name == "DAM") selected @endif>DAM</option>
                      <option value="Right Jessore" @if($editData->name == "Right Jessore") selected @endif>Right Jessore</option>
              
                    </select>
                  </div>
                  <div class="form-group col-md-4">

                  </div>
                  <div class="form-group col-md-4">

                  </div>
                   @php
$divisions=DB::table('divisions')->get();
@endphp

                  <div class="form-group col-md-3">
                    <label>Division</label>
                    
                    <select name="division_id" class="form-control" id="">

                    <option value="">Select Division</option>
                      @foreach($divisions as $division)
                      <option value="{{ $division->id }}" @if($division->id == $editData->division_id) selected @endif>{{ $division->name }} {{$division->bn_name}}</option>

                     @endforeach
                    </select>
                  </div>

                  @php
                  $districs=DB::table('districs')->get();
                  @endphp


                  <div class="form-group col-md-3">
                    <label>District Name</label>
                    <select class="form-control" name="district_id"  id="exampleSelectGender">
                    @foreach($districs as $distric)
                    <option value="{{ $distric->id }}" @if($distric->id == $editData->district_id) selected @endif>{{ $distric->name }} {{$distric->bn_name}}</option>

                   @endforeach
                  </select>
                  </div>
                  @php
$upazilas=DB::table('upazilas')->get();
@endphp
                  <div class="form-group col-md-3">
                    <label>Upazila Name</label>
                    
                    <select name="upazilla_id" class="form-control" id="">
                        <option value="">Select Upazila</option>
                        @foreach($upazilas as $upazila)
                        <option value="{{ $upazila->id }}" @if($upazila->id == $editData->upazilla_id) selected @endif>{{ $upazila->name }} {{$upazila->bn_name}}</option>

                        @endforeach
                    </select>
                  </div>
                  @php
$unions=DB::table('unions')->get();
@endphp   
                  <div class="form-group col-md-3">
                    <label>Union Name</label>
                    
                    <select class="form-control" name="union_id" id="exampleSelectGender">
                      @foreach($unions as $union)
                      <option value="{{ $union->id }}" @if($union->id == $editData->union_id) selected @endif>{{ $union->name }} {{$union->bn_name}}</option>
                      @endforeach
               </select>
                  </div>




                  <div class="form-group col-md-3">
                    <label> Focal Person 1 Name  *</label>
                    <input type="text" class="form-control" name="focal_person_name_one"  value="{{ $editData->focal_person_name_one }}">
                   
                  </div>


                  <div class="form-group col-md-3">
                    <label>Focal Person 1 Designation </label>
                    <input type="text" name="designation_one"  class="form-control" value="{{ $editData->designation_one }}">
        
                  </div>

                  <div class="form-group col-md-3">
                    <label>Focal Person 1 Telephone/Mobile  </label>
                    <input type="text" name="focal_person_number_one"   class="form-control" value="{{ $editData->focal_person_number_one }}">
        
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal Person 1 E-Mail  </label>
                    <input type="text" name="email"   class="form-control" value="{{ $editData->email }}">
        
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal Person 2 Name </label>
                    <input type="text" name="focal_person_name_two"  class="form-control" value="{{ $editData->focal_person_name_two }}">
                  
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal Person 2 Designation </label>
                    <input type="text" name="designation_two"   class="form-control" value="{{ $editData->designation_two }}">
                  
                  </div>
               
            

                  <div class="form-group col-md-3">
                    <label>Focal Person 2 Telephone/Mobile,  </label>
                    <input type="text" name="focal_person_number_two"  class="form-control"  value="{{ $editData->focal_person_number_two }}">
                  </div>

                  <div class="form-group col-md-3">
                    <label>Focal Person 2 E-Mail  </label>
                    <input type="email" name="focal_person_email_two"  class="form-control"  value="{{ $editData->focal_person_email_two }}">
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal Person 3 Name </label>
                    <input type="text" name="focal_person_name_three" class="form-control" value="{{ $editData->focal_person_name_three }}">
                   
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal person 3 Designation  </label>
                    <input type="text" name="designation_three" class="form-control" value="{{ $editData->designation_three }}">
                   
                  </div>
                

                  <div class="form-group col-md-3">
                    <label>Focal Person 3 Telephone/Mobile </label>
                    <input type="text" name="focal_person_number_three"  class="form-control"  value="{{ $editData->focal_person_number_three }}">
                  </div>

                  <div class="form-group col-md-3">
                    <label>Focal person 3 E-Mail </label>
                    <input type="text" name="focal_person_email_three"  class="form-control"  value="{{ $editData->focal_person_email_three }}">
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
@endif

@if(auth()->user()->user_type =="UN")
@php
$id=Auth::user()->id;
$editData =App\Models\User::find($id);

@endphp


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
   <form action="{{ url('un/profile') }}" method="post" class="forms-sample"  enctype="multipart/form-data">
                @csrf
              <div class="form-row">
               
                  <div class="form-group col-md-4">
                    <label>Name of  UN*</label>
                    <select name="name" id="" class="form-control">
                      <option value="IOM" @if($editData->name == "IOM") selected @endif>IOM</option>
                      <option value="UNODC" @if($editData->name == "UNODC") selected @endif>UNODC</option>
                    
                      
                    </select>
                    
                  </div>
                   @php
$divisions=DB::table('divisions')->get();
@endphp

                  <div class="form-group col-md-4">
                    <label>Division</label>
                    
                    <select name="division_id" class="form-control" id="">

                    <option value="">Select Division</option>
                      @foreach($divisions as $division)
                      <option value="{{ $division->id }}" @if($division->id == $editData->division_id) selected @endif>{{ $division->name }} {{$division->bn_name}}</option>

                     @endforeach
                    </select>
                  </div>
                  @php
                  $districs=DB::table('districs')->get();
                  @endphp
                  <div class="form-group col-md-4">
                    <label>District Name</label>
                    
                    <select class="form-control" name="district_id" id="exampleSelectGender">
                      @foreach($districs as $distric)
                      <option value="{{ $distric->id }}" @if($distric->id == $editData->district_id) selected @endif>{{ $distric->name }} {{$distric->bn_name}}</option>

                     @endforeach
                      </select>
                  </div>



                  <div class="form-group col-md-3">
                    <label> Focal Person 1 Name  *</label>
                    <input type="text" class="form-control" name="focal_person_name_one"  value="{{ $editData->focal_person_name_one }}">
                   
                  </div>


                  <div class="form-group col-md-3">
                    <label>Focal Person 1 Designation </label>
                    <input type="text" name="designation_one"  class="form-control" value="{{ $editData->designation_one }}">
        
                  </div>

                  <div class="form-group col-md-3">
                    <label>Focal Person 1 Telephone/Mobile  </label>
                    <input type="text" name="focal_person_number_one"   class="form-control" value="{{ $editData->focal_person_number_one }}">
        
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal Person 1 E-Mail  </label>
                    <input type="text" name="email"   class="form-control" value="{{ $editData->email }}">
        
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal Person 2 Name </label>
                    <input type="text" name="focal_person_name_two"  class="form-control" value="{{ $editData->focal_person_name_two }}">
                  
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal Person 2 Designation </label>
                    <input type="text" name="designation_two"   class="form-control" value="{{ $editData->designation_two }}">
                  
                  </div>
               
            

                  <div class="form-group col-md-3">
                    <label>Focal Person 2 Telephone/Mobile,  </label>
                    <input type="text" name="focal_person_number_two"  class="form-control"  value="{{ $editData->focal_person_number_two }}">
                  </div>

                  <div class="form-group col-md-3">
                    <label>Focal Person 2 E-Mail  </label>
                    <input type="email" name="focal_person_email_two"  class="form-control"  value="{{ $editData->focal_person_email_two }}">
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal Person 3 Name </label>
                    <input type="text" name="focal_person_name_three" class="form-control" value="{{ $editData->focal_person_name_three }}">
                   
                  </div>

                  <div class="form-group col-md-3">
                    <label> Focal person 3 Designation  </label>
                    <input type="text" name="designation_three" class="form-control" value="{{ $editData->designation_three }}">
                   
                  </div>
                

                  <div class="form-group col-md-3">
                    <label>Focal Person 3 Telephone/Mobile </label>
                    <input type="text" name="focal_person_number_three"  class="form-control"  value="{{ $editData->focal_person_number_three }}">
                  </div>

                  <div class="form-group col-md-3">
                    <label>Focal person 3 E-Mail </label>
                    <input type="text" name="focal_person_email_three"  class="form-control"  value="{{ $editData->focal_person_email_three }}">
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


@endif

 
    </div>



@endsection


   