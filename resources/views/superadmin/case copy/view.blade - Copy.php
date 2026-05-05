@extends('layouts.app')

@section('content')


<style>
  table {
    width: 100%;
    border-spacing: 0;
    border-collapse: collapse;
  }

  td,
  th {
    padding: 0.5rem 1rem;
    border: solid 1px;
  }

  th {
    background-color: #eee;
  }

  .divNew {
    padding-top: 0.1rem;
    display: inline-table;
  }
</style>



<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Case View</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <form action="" method="post" enctype="multipart/form-data">
      
        <div class="row">

   <!-- question no 1  Start -->
   @include('superadmin.case.view.1view')
    <!-- question no 1  end -->
   
    <!-- question no 2  Start -->
    @include('superadmin.case.view.2view')
    <!-- question no 2  Start -->
 
    <!-- question no 3  Start -->
    @include('superadmin.case.view.3view')
    <!--  question no 3  End -->
   
 
    <!-- question no 4 end -->
    @include('superadmin.case.view.4view')
    <!-- question no 4 end -->
    
    <!-- question no 5 Start -->
    @include('superadmin.case.view.5view')
    <!-- question no 5 end -->
 
    <!-- question no 6 Start -->
    @include('superadmin.case.view.6view')
    
    <!-- question no 6 end -->

    <!-- question no 7 Start -->
    @include('superadmin.case.view.7view')
    <!-- question no 7 end -->



    <!-- question no 8 Start -->
    @include('superadmin.case.view.8view')
    <!-- question no 8 end -->




    <!-- question no 9 Start -->
    @include('superadmin.case.view.9view')
    <!-- question no 9 end -->

    <!-- question no 10 end -->
    @include('superadmin.case.view.10view')
    
  
    <!-- question no 10 end -->
    <!-- question no 11 Start  -->
    @include('superadmin.case.view.11view')
    <!-- question no 11 end -->

    <!-- question no 12 Start -->
    @include('superadmin.case.view.12view')
  
    <!-- question no 12 end -->

    <!-- question no 13 Start -->
    @include('superadmin.case.view.13view')
    <!-- question no 13 end -->


    <!-- question no 14 Start -->
    @include('superadmin.case.view.14view')
    <!-- question no 14 end -->


    <!-- question no 15 Start -->
    @include('superadmin.case.view.15view')
    <!-- question no 15 end -->
 

    <!-- question no 16 end -->
    @include('superadmin.case.view.16view')
    <!-- question no 16 end -->

   <!-- question no 17  -->
   @include('superadmin.case.view.17view')
    <!-- question no 17 end -->
  
    <!-- question no 18 Start -->
  
    @include('superadmin.case.view.18view')
    <!-- question no 18 end -->

    <!-- question no 19 Start -->
    @include('superadmin.case.view.19view')
    <!-- question no 19 end -->

    <!-- question no 20 Start -->
    @include('superadmin.case.view.20view')
    <!-- question no 20 end -->

    <!-- question no 21 Start -->
    @include('superadmin.case.view.21view')
    <!-- question no 21 end -->

    <!-- question no 22 Start -->
    @include('superadmin.case.view.22view')
    <!-- question 22 end -->



    <!-- question 23  start -->
    @include('superadmin.case.view.23view')
    <!-- question 23 end -->
    <!-- question 24 -->
    @include('superadmin.case.view.24view')
    <!-- question 24 end -->


    <!-- question 25 start  -->
    @include('superadmin.case.view.25view')
    <!-- question no 25 end  -->


    <!-- question no 26 Start  -->
    @include('superadmin.case.view.26view')
    <!-- question no 26 end  -->


    <!-- question no 27 Start  -->
    @include('superadmin.case.view.27view')
    <!-- question no 27 end -->


    <!-- question no 28 Start  -->
    @include('superadmin.case.view.28view')
    <!-- question no 28 end please   -->

    <!-- question no 29 end -->
    @include('superadmin.case.view.29view')
    <!-- question no 29 end -->


    <!-- question no 30 Start -->
    @include('superadmin.case.view.30view')
    <!-- question no 30 end -->

    <!-- question no 31 Start -->
    @include('superadmin.case.view.31view')
   
    <!-- question no 31 end -->

    <!-- question no 32 Start -->
    @include('superadmin.case.view.32view')
    <!-- question no 32 End -->


    <!-- question no 33 Start -->
    @include('superadmin.case.view.33view')
    <!-- question no 33 end -->

    <!-- question no 34 Start -->
    @include('superadmin.case.view.34view')
    <!-- question no 34 end -->
    <!-- question no 35 Start -->
    @include('superadmin.case.view.35view')
    <!-- question no 35 End -->

    <!-- question no 36 Start -->
    @include('superadmin.case.view.36view')
    <!-- question no 36 End -->


    <!-- question no 37 Start -->
    @include('superadmin.case.view.37view')
    <!-- question no 37 End -->

    <!-- question no 38 Start -->
    @include('superadmin.case.view.38view')
    <!-- question no 38 End -->

    <!-- question no 39 Start -->
    @include('superadmin.case.view.39view')
    <!-- question no 39 end -->
    <!-- question no 40  -->
    @include('superadmin.case.view.40view')
    <!-- question no 40 end -->
    @include('superadmin.case.view.41view')
    <!-- qestion no 41 end -->

    <!-- qestion no 42 end -->
    @include('superadmin.case.view.42view')
    <!-- qestion no 43 end -->
   
    @include('superadmin.case.view.43view')
    <!-- question no 44 end -->

    @include('superadmin.case.view.44view')
 
    <!-- question no 45 end -->
    @include('superadmin.case.view.45view')
    <!-- question no 46 end -->
    @include('superadmin.case.view.46view')
    <!-- question no 47 -->
    @include('superadmin.case.view.47view')

     <!-- question no 48  -->
     @include('superadmin.case.view.48view')
      <!-- question no 48 end -->
   
    <!-- question no 49 end -->
    @include('superadmin.case.view.49view')
    <!-- question no 49 end -->

    <!-- question no 50  -->
    @include('superadmin.case.view.50view')
    <!-- question no 50 end -->


   <!-- question no 51  -->
   @include('superadmin.case.view.51view')
    <!-- question no 51 end -->


<!-- question no 52  -->
@include('superadmin.case.view.52view')
<!-- question no 52 end -->

     <!-- question no 53  -->
     @include('superadmin.case.view.53view')
    <!-- question no 53 end -->
    

    <!-- question no 54 -->
    @include('superadmin.case.view.54view')
    <!-- question no 54 end -->

     <!-- question no 55 -->
     @include('superadmin.case.view.55view')
      <!-- question no 55  end -->

 <!-- question no 56   -->
 @include('superadmin.case.view.56view')
       <!-- question no 55  end -->

        <!-- question no 57   -->
 @include('superadmin.case.view.57view')
       <!-- question no 57  end -->
    <!-- question no 58  -->
    @include('superadmin.case.view.58view')
    <!-- question no 58 end -->

     <!-- question no 59  -->
     @include('superadmin.case.view.59view')
  <!-- question no 59  -->

  <!-- question no 60  -->
  @include('superadmin.case.view.60view')
  <!-- question no 60  -->


   



    <!-- <button type="Submit" class="btn  btn-primary">Upload And Submit</button> -->
    </form>



</div>
</section>



</div>

@endsection