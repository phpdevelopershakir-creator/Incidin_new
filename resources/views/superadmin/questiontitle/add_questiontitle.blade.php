@extends('layouts.app')
@section('content')

<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Question Create

            </h3>
             <div class="col-sm-6" style="text-align: right">
            <a href="{{ url('superadmin/all/question') }}" class="btn btn-primary">Question List</a>
          </div>
           
          </div>
          <div class="form-row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
        
                  <form class="forms-sample" action="{{ url('superadmin/store/question') }}" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Question  Name*</label>
                          <input type="text" name="title" class="form-control form-control-sm" value="{{ old('title') }}" id="exampleInputUsername1"
                            placeholder="Question  Name">
                            <p style="color:red">{{ $errors->first('name') }}</p>
                        </div>
                      </div>
     
  
                    
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Status</label>
                          <select name="status" id="" class="form-control" required="">
                          <option value="" disabled>Status Select </option>
                          <option value="1">Yes</option>
                          <option value="0">No</option>
                        </select>
                            <p style="color:red">{{ $errors->first('status') }}</p>
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


   