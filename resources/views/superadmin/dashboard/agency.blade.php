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