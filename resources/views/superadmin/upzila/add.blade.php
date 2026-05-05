@extends('layouts.app')
@section('content')

<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Upazila Create
            </h3>
               <div class="col-sm-6" style="text-align: right">
            <a href="{{ route('superadmin.all.upazila') }}" class="btn btn-primary">All  Upazila</a>
          </div>
           
          </div>
          <div class="form-row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
        
                  <form class="forms-sample" action="{{ route('superadmin.store.upazila') }}" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Upazila  Name <span style="color:red">*</span></span></label>
                          <input type="text" name="name" class="form-control form-control-sm" value="{{ old('name') }}" id="exampleInputUsername1"
                            placeholder="Upazila  Name">
                            <p style="color:red">{{ $errors->first('name') }}</p>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Upazila  Bangla<span style="color:red">*</span></label>
                          <input type="text" name="bn_name" class="form-control form-control-sm" value="{{ old('bn_name') }}" id="exampleInputUsername1"
                            placeholder="Upazila Bangla">
                            <p style="color:red">{{ $errors->first('bn_name') }}</p>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Upazila  Url<span style="color:red">*</span></label>
                          <input type="text" name="url" class="form-control form-control-sm" value="{{ old('url') }}" id="exampleInputUsername1"
                            placeholder="Upazila Url">
                            <p style="color:red">{{ $errors->first('url') }}</p>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Districts  Name <span style="color:red">*</span></label>
                       <select class="form-control" name="distric_id" required>
                         <option selected="" disabled="">Select Divisdion </option>
                         @foreach($districs as $distric)
                           <option value="{{$distric->id}}">{{$distric->name}} {{$distric->bn_name}}</option>
                         @endforeach
                       </select>
                            <p style="color:red">{{ $errors->first('division_id') }}</p>
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


   