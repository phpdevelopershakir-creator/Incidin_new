@extends('layouts.app')
@section('content')

<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Banner 
            </h3>
           
           
          </div>
          <div class="form-row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
        
                   <form action="{{url('superadmin/banner/store')}}" method="post" class="forms-sample"  enctype="multipart/form-data">
                    @csrf

                  <input type="hidden" name="id" value="{{$banner->id}}">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Banner Image <span style="color:red">*  (1080px X 212 px)</span></span></label>
                          <input type="file" name="image" class="form-control form-control-sm"  id="exampleInputUsername1"
                           >
                            <p style="color:red">{{ $errors->first('image') }}</p>
                            <img src="{{$banner->getBanner()}}" alt="image" >
                        </div>
                      </div>

                       <div class="form-group col-md-12">
                        <label>Status</label>
                        <select class="form-control" name="status" >
                          <option value="1" @if($banner->status == "1") selected @endif>Yes</option>
                          <option value="0" @if($banner->status == "0") selected @endif>No</option>
  
                        </select>
                        <p style="color:red">{{ $errors->first('status') }}</p>
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


   