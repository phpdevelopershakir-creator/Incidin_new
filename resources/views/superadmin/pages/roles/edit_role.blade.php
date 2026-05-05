@extends('layouts.app')
@section('content')

<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Role Edit
            </h3>
               <div class="col-sm-6" style="text-align: right">
            <a href="{{ url('superadmin/all/role') }}" class="btn btn-primary">All  Role</a>
          </div>
           
          </div>
          <div class="form-row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
        
                  <form class="forms-sample" action="{{ url('superadmin/update/role',$role->id) }}" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Role  Name <span style="color:red">*</span></span></label>
                          <input type="text" name="name" class="form-control form-control-sm" value="{{ old('name',$role->name) }}" id="exampleInputUsername1"
                            placeholder="Role  Name">
                            <p style="color:red">{{ $errors->first('name') }}</p>
                        </div>
                      </div>
                    </div>
                  
                

                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    
                  </form>
                </div>
              </div>
            </div>
           
          
        
            
         
           
          </div>
        </div>

    


@endsection


   