@extends('layouts.app')
@section('content')

<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              District Create
            </h3>
               <div class="col-sm-6" style="text-align: right">
            <a href="{{ route('superadmin.all.district') }}" class="btn btn-primary">All  district</a>
          </div>
           
          </div>
          <div class="form-row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
        
                  <form class="forms-sample" action="{{ route('superadmin.store.district') }}" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputUsername1">District  Name <span style="color:red">*</span></span></label>
                          <input type="text" name="name" class="form-control form-control-sm" value="{{ old('name') }}" id="exampleInputUsername1"
                            placeholder="District  Name">
                            <p style="color:red">{{ $errors->first('name') }}</p>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputUsername1">District  Bangla<span style="color:red">*</span></label>
                          <input type="text" name="bn_name" class="form-control form-control-sm" value="{{ old('bn_name') }}" id="exampleInputUsername1"
                            placeholder="District Bangla">
                            <p style="color:red">{{ $errors->first('bn_name') }}</p>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Division  Namew <span style="color:red">*</span></label>
                       <select class="form-control" name="division_id" required>
                         <option selected="" disabled="">Select Divisdion </option>
                         @foreach($divisions as $division)
                           <option value="{{$division->id}}">{{$division->name}} {{$division->bn_name}}</option>
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


   