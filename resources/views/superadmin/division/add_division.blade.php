@extends('layouts.app')
@section('content')

<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Division Create
            </h3>
               <div class="col-sm-6" style="text-align: right">
            <a href="{{ route('superadmin.all.division') }}" class="btn btn-primary">All  Division</a>
          </div>
           
          </div>
          <div class="form-row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
        
                  <form class="forms-sample" action="{{ url('superadmin/store/division') }}" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Division  Name <span style="color:red">*</span></span></label>
                          <input type="text" name="name" class="form-control form-control-sm" value="{{ old('name') }}" id="exampleInputUsername1"
                            placeholder="Division  Name">
                            <p style="color:red">{{ $errors->first('name') }}</p>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Division  Bangla<span style="color:red">*</span></label>
                          <input type="text" name="bn_name" class="form-control form-control-sm" value="{{ old('bn_name') }}" id="exampleInputUsername1"
                            placeholder="Division Bangla">
                            <p style="color:red">{{ $errors->first('bn_name') }}</p>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Division  Url <span style="color:red">*</span></label>
                          <input type="text" name="url" class="form-control form-control-sm" value="{{ old('url') }}" id="exampleInputUsername1"
                            placeholder="Division  Url">
                            <p style="color:red">{{ $errors->first('url') }}</p>
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


   