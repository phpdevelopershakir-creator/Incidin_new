@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Password Change</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Password Change</li>
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
           
          

                <div class="card-body">
       <form action="" method="post" class="forms-sample"  enctype="multipart/form-data">
                    @csrf
                  <div class="form-row">
                   
                      <div class="form-group col-md-6">
                        <label>Old Password  *</label>
                        <input type="password" name="oldpass" class="form-control"   require>
                        <p style="color:red">{{ $errors->first('password') }}</p>
                      </div>


                     

                      <div class="form-group col-md-6">
                        <label>New  Password *</label>
                        <input type="password" name="password"  class="form-control" required="">
                        <p style="color:red">{{ $errors->first('password') }}</p>
                      </div>

                      <div class="form-group col-md-6">
                        <label>Confirm   Password *</label>
                        <input type="password" name="password_confirmation"  class="form-control" required="">
                        <p style="color:red">{{ $errors->first('password') }}</p>
                      </div>

           


                       </div>


                      
                       </div>
                    

                    


                   

                    <div class="form-group col-md-6">
                      <button type="submit" class="btn btn-primary">Submit</button>
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


   