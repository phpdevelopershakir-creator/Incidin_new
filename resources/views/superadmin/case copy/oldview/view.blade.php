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
    @if(Auth::user()->can('39.question'))
    @endif
    <!-- question no 39 end -->
    <!-- question no 40  -->
    @include('superadmin.case.view.40view')
    <!-- question no 40 end -->
    @if(Auth::user()->can('41.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">41 Please provide details on Court Proceedings by District:</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <h3>Please provide details on Court Proceedings by District:</h3>
          <table cellpadding=0 celspecing=0 width="100%">
            <tr>
              <td> l#</td>
              <td>District</td>
              <td>Previous Cases</td>
              <td>Previous Cases</td>
              <td>Received Cases</td>
              <td>Total Cases</td>
              <td>Disposed Cases</td>
              <td>Transferred Cases</td>
              <td>Pending Cases</td>
              <td>Cases more than five year - old</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Dhaka</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_eight ?? '' }}" class="form-control" readonly></td>

            </tr>
            <tr>
              <td>2</td>
              <td>Narayongonj</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_ten ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_eleven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_twelve ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_thirteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_fourteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_fifteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_sixteen ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Gazipur </td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_seventeen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_eighteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_nineteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_twenty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_twenty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_twenty_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_twenty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_twenty_four ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>4</td>
              <td>Manikgonj</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_twenty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_twenty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_twenty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_twenty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_twenty_night ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_thirty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_thirty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_thirty_two ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>5</td>
              <td>Munshigonj</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_thirty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_thirty_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_thirty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_thirty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_thirty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_thirty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_thirty_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one->forty_one_forty ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>6</td>
              <td>Narshindi</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_eight ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>7</td>
              <td>Tangail </td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_ten ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_eleven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_twelve ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_thirteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_fourteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_fifteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_sixteen ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>8</td>
              <td>Kishorgonj</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_seventeen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_eighteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_nineteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_twenty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_twenty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_twenty_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_twenty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_twenty_four ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>9</td>
              <td>Faridpur</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_twenty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_twenty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_twenty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_twenty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_twenty_night ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_thirty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_thirty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_thirty_two ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>10</td>
              <td>Rajbari</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_thirty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_thirty_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_thirty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_thirty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_thirty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_thirty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_thirty_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one2->forty2_forty ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>11</td>
              <td>Gopalgonj</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_eight ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>12</td>
              <td>Shariatpur</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_ten ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_eleven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_twelve ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_thirteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_fourteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_fifteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_sixteen ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>13</td>
              <td>Madaripur</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_seventeen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_eighteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_nineteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_twenty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_twenty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_twenty_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_twenty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_twenty_four ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>14</td>
              <td>Chattogram</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_twenty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_twenty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_twenty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_twenty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_twenty_night ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_thirty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_thirty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_thirty_two ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>15</td>
              <td>Coxsbazar</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_thirty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_thirty_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_thirty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_thirty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_thirty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_thirty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_thirty_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one3->forty3_forty ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>16</td>
              <td>Rangamati</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_eight ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>17</td>
              <td>Bandarban</td>
             
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_ten ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_eleven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_twelve ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_thirteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_fourteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_fifteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_sixteen ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>18</td>
              <td>Khagrachhari</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_seventeen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_eighteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_nineteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_twenty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_twenty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_twenty_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_twenty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_twenty_four ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>19</td>
              <td>Noakhali</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_twenty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_twenty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_twenty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_twenty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_twenty_night ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_thirty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_thirty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_thirty_two ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>20</td>
              <td>Feni</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_thirty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_thirty_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_thirty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_thirty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_thirty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_thirty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_thirty_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one4->forty4_forty ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>21</td>
              <td>Lakshmipur</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_eight ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>22</td>
              <td>Cumilla</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_ten ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_eleven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_twelve ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_thirteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_fourteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_fifteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_sixteen ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>23</td>
              <td>Brahmanbaria</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_seventeen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_eighteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_nineteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_twenty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_twenty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_twenty_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_twenty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_twenty_four ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>24</td>
              <td>Chandpur</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_twenty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_twenty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_twenty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_twenty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_twenty_night ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_thirty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_thirty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_thirty_two ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>25</td>
              <td>Rajshahi</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_thirty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_thirty_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_thirty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_thirty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_thirty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_thirty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_thirty_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one5->forty5_forty ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>26</td>
              <td>Chapainawabganj</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_eight ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>27</td>
              <td>Naogaon</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_ten ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_eleven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_twelve ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_thirteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_fourteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_fifteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_sixteen ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>28</td>
              <td>Natore</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_seventeen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_eighteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_nineteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_twenty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_twenty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_twenty_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_twenty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_twenty_four ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>29</td>
              <td>Bogura</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_twenty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_twenty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_twenty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_twenty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_twenty_night ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_thirty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_thirty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_thirty_two ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>30</td>
              <td>Joypurhat</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_thirty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_thirty_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_thirty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_thirty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_thirty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_thirty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_thirty_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one6->forty6_forty ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>31</td>
              <td>Pabna</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_eight ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>32</td>
              <td>Sirajganj</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_ten ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_eleven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_twelve ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_thirteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_fourteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_fifteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_sixteen ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>33</td>
              <td>Khulna</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_seventeen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_eighteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_nineteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_twenty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_twenty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_twenty_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_twenty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_twenty_four ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>34</td>
              <td>Bagerhat</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_twenty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_twenty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_twenty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_twenty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_twenty_night ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_thirty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_thirty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_thirty_two ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>35</td>
              <td>Jashore</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_thirty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_thirty_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_thirty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_thirty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_thirty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_thirty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_thirty_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one7->forty7_forty ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>36</td>
              <td>Kushtia</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_eight ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>37</td>
              <td>Jhenaidah</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_ten ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_eleven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_twelve ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_thirteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_fourteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_fifteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_sixteen ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>38</td>
              <td>Satkhira</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_seventeen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_eighteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_nineteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_twenty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_twenty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_twenty_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_twenty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_twenty_four ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>39</td>
              <td>Chuadanga</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_twenty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_twenty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_twenty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_twenty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_twenty_night ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_thirty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_thirty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_thirty_two ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>40</td>
              <td>Magura</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_thirty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_thirty_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_thirty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_thirty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_thirty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_thirty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_thirty_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one8->forty8_forty ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>41</td>
              <td>Narail</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_eight ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>42</td>
              <td>Meherpur</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_ten ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_eleven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_twelve ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_thirteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_fourteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_fifteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_sixteen ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>43</td>
              <td>Barishal</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_seventeen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_eighteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_nineteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_twenty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_twenty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_twenty_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_twenty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_twenty_four ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>44</td>
              <td>Bhola</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_twenty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_twenty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_twenty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_twenty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_twenty_night ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_thirty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_thirty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_thirty_two ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>45</td>
              <td>Patuakhali</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_thirty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_thirty_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_thirty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_thirty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_thirty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_thirty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_thirty_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one9->forty9_forty ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>46</td>
              <td>Jhalakathi</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_eight ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>47</td>
              <td>Pirojpur</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_ten ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_eleven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_twelve ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_thirteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_fourteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_fifteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_sixteen ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>48</td>
              <td>Barguna</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_seventeen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_eighteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_nineteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_twenty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_twenty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_twenty_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_twenty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_twenty_four ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>49</td>
              <td>Sylhet</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_twenty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_twenty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_twenty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_twenty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_twenty_night ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_thirty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_thirty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_thirty_two ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>50</td>
              <td>Sunamganj</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_thirty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_thirty_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_thirty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_thirty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_thirty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_thirty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_thirty_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one10->forty10_forty ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>51</td>
              <td>Moulvibazar</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_eight ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>52</td>
              <td>Habiganj</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_ten ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_eleven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_twelve ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_thirteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_fourteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_fifteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_sixteen ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>53</td>
              <td>Rangpur </td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_seventeen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_eighteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_nineteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_twenty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_twenty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_twenty_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_twenty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_twenty_four ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>54</td>
              <td>Gaibandha</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_twenty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_twenty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_twenty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_twenty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_twenty_night ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_thirty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_thirty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_thirty_two ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>55</td>
              <td>Kurigram</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_thirty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_thirty_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_thirty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_thirty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_thirty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_thirty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_thirty_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one11->forty11_forty ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>56</td>
              <td>Nilphamari</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_eight ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>57</td>
              <td>Lalmonirhat</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_ten ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_eleven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_twelve ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_thirteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_fourteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_fifteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_sixteen ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>58</td>
              <td>Dinajpur</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_seventeen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_eighteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_nineteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_twenty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_twenty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_twenty_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_twenty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_twenty_four ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>59</td>
              <td>Thakurgaon</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_twenty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_twenty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_twenty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_twenty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_twenty_night ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_thirty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_thirty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_thirty_two ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>60</td>
              <td>Panchagarh</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_thirty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_thirty_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_thirty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_thirty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_thirty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_thirty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_thirty_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one12->forty12_forty ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>61</td>
              <td>Mymensingh</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_four ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_eight ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>62</td>
              <td>Jamalpur</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_nine ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_ten ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_eleven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_twelve ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_thirteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_fourteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_fifteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_sixteen ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>63</td>
              <td>Sherpur</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_seventeen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_eighteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_nineteen ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_twenty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_twenty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_twenty_two ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_twenty_three ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_twenty_four ?? '' }}" class="form-control" readonly></td>
            </tr>
            <tr>
              <td>64</td>
              <td>Netrokona</td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_twenty_five ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_twenty_six ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_twenty_seven ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_twenty_eight ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_twenty_night ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_thirty ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_thirty_one ?? '' }}" class="form-control" readonly></td>
              <td><input type="text"  value="{{ $case->fourtfourteen_one13->forty13_thirty_two ?? '' }}" class="form-control" readonly></td>
            </tr>





          </table>
        </div>
      </div>
    </div>
    @endif
    <!-- qestion no 41 end -->
    @if(Auth::user()->can('42.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">42.Conviction of Internal Trafficking by Division</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <h2>Conviction of Internal Trafficking by Division</h2>
          <h3>Total number of persons convicted of trafficking for sexual exploitation</h3>
          <table class="table table-white">
            <thead>
              <tr>
                <th>Division</th>
                <th>male</th>
                <th>Female</th>
                <th>TG</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Barishal</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>

              <tr>
                <td>Chattogram</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Dhaka</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Khulna</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Mymensingh </td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Rajshahi</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Sylhet</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
            </tbody>
          </table>
          <br>
          <h3>Total number of persons convicted of trafficking for forced labour</h3>
          <table class="table table-white">
            <thead>
              <tr>
                <th>Division</th>
                <th>male</th>
                <th>Female</th>
                <th>TG</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Barishal</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>

              <tr>
                <td>Chattogram</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Dhaka</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Khulna</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Mymensingh </td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Rajshahi</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Sylhet</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
            </tbody>
          </table>
          <h3>Total number of persons convicted of trafficking for removal of organs</h3>
          <table class="table table-white">
            <thead>
              <tr>
                <th>Division</th>
                <th>male</th>
                <th>Female</th>
                <th>TG</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Barishal</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>

              <tr>
                <td>Chattogram</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Dhaka</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Khulna</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Mymensingh </td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Rajshahi</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Sylhet</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
            </tbody>
          </table>
          <h3>Total number of persons convicted of trafficking for other purposes
            (option-1:___________________________)
          </h3>
          <table class="table table-white">
            <thead>
              <tr>
                <th>Division</th>
                <th>male</th>
                <th>Female</th>
                <th>TG</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Barishal</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>

              <tr>
                <td>Chattogram</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Dhaka</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Khulna</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Mymensingh </td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Rajshahi</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Sylhet</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
            </tbody>
          </table>

          <h2>Conviction of International Trafficking by Division</h2>
          <h3>Total number of persons convicted of trafficking for sexual exploitation</h3>
          <table class="table table-white">
            <thead>
              <tr>
                <th>Division</th>
                <th>male</th>
                <th>Female</th>
                <th>TG</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Barishal</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>

              <tr>
                <td>Chattogram</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Dhaka</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Khulna</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Mymensingh </td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Rajshahi</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Sylhet</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
            </tbody>
          </table>



          <h3>Total number of persons convicted of trafficking for forced labour</h3>
          <table class="table table-white">
            <thead>
              <tr>
                <th>Division</th>
                <th>male</th>
                <th>Female</th>
                <th>TG</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Barishal</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>

              <tr>
                <td>Chattogram</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Dhaka</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Khulna</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Mymensingh </td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Rajshahi</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Sylhet</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
            </tbody>
          </table>



          <h3>Total number of persons convicted of trafficking for removal of organs</h3>
          <table class="table table-white">
            <thead>
              <tr>
                <th>Division</th>
                <th>male</th>
                <th>Female</th>
                <th>TG</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Barishal</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>

              <tr>
                <td>Chattogram</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Dhaka</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Khulna</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Mymensingh </td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Rajshahi</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Sylhet</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
            </tbody>
          </table>




          <h3>Total number of persons convicted of trafficking for other purposes
            (option-1:___________________________)
          </h3>
          <table class="table table-white">
            <thead>
              <tr>
                <th>Division</th>
                <th>male</th>
                <th>Female</th>
                <th>TG</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Barishal</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>

              <tr>
                <td>Chattogram</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Dhaka</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Khulna</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Mymensingh </td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Rajshahi</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
              <tr>
                <td>Sylhet</td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control"></td>
                <td><input type="text" name="" id="" class="form-control" readonly="true"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

@endif
@include('superadmin.case.view.43view')

    <!-- question no 43 end -->

    @if(Auth::user()->can('44.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">44.Did any allegedly complicit officials face criminal investigations,
            prosecutions, convictions, or sentencing?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-white">
            <thead>
              <tr>
                <th rowspan="2" scope="col">Ministry/Department</th>
                <th colspan="3">Number of Official Accused</th>
                <th rowspan="2">Measures Taken</th>

              </tr>
              <tr>
                <td>Men</td>
                <td>Women</td>
                <td>Total</td>

              </tr>
              <tr>
                <td><input type="text" name="one" class="form-control"></td>
                <td><input type="text" name="two" class="form-control"></td>
                <td><input type="text" name="three" class="form-control"></td>
                <td><input type="text" name="four" class="form-control"></td>
                <td><input type="text" name="five" class="form-control"></td>

              </tr>
              <tr>
                <td><input type="text" name="six" class="form-control"></td>
                <td><input type="text" name="seven" class="form-control"></td>
                <td><input type="text" name="eight" class="form-control"></td>
                <td><input type="text" name="night" class="form-control"></td>
                <td><input type="text" name="ten" class="form-control"></td>

              </tr>
              <tr>
                <td><input type="text" name="eleven" class="form-control"></td>
                <td><input type="text" name="twelve" class="form-control"></td>
                <td><input type="text" name="thirteen" class="form-control"></td>
                <td><input type="text" name="fourteen" class="form-control"></td>
                <td><input type="text" name="fifteen" class="form-control"></td>

              </tr>
              <tr>
                <td><input type="text" name="sixteen" class="form-control"></td>
                <td><input type="text" name="seventeen" class="form-control"></td>
                <td><input type="text" name="eighteen" class="form-control"></td>
                <td><input type="text" name="nineteen" class="form-control"></td>
                <td><input type="text" name="twenty" class="form-control"></td>

              </tr>










            </thead>
          </table>
        </div>
      </div>
    </div>
    @endif
    <!-- question no 44 end -->

    @if(Auth::user()->can('45.question'))
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">45.Did the government take any new to ensure that its policies, regulations, and
            agreements relating to
            migration, labor, trade, border security measures, and investment did not facilitate trafficking?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="form-check">
            <input class="form-check-input" name="status" type="checkbox" value="yes">
            <label class="form-check-label">
              Yes
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="status" type="checkbox" value="no">
            <label class="form-check-label">
              No
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" name="status" type="checkbox" value="n/a">
            <label class="form-check-label">
              N/A
            </label>
          </div>

          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Ministry/Department</th>
                <th scope="col">Measures Taken</th>
              </tr>
            </thead>
            <tbody>
              <tr>

                <td> <input type="text" name="one" class="form-control"> </td>
                <td> <input type="text" name="two" class="form-control"> </td>
              </tr>

              <tr>

                <td> <input type="text" name="three" class="form-control"> </td>
                <td> <input type="text" name="four" class="form-control"> </td>
              </tr>

              <tr>

                <td> <input type="text" name="five" class="form-control"> </td>
                <td> <input type="text" name="six" class="form-control"> </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endif
    <!-- question no 45 end -->
    @include('superadmin.case.view.46view')
    <!-- question no 46 end -->
    @include('superadmin.case.view.47view')
    <!-- question no 47 -->


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