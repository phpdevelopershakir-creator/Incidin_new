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