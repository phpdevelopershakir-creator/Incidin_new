
@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Report Search </h1>
          </div>
          <div class="col-sm-6" style="text-align: right">
            <!-- <a href="{{ url('superadmin/user/create') }}" class="btn btn-primary">Create New User</a> -->
          </div>
        </div>
      </div>
    </section>

 
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Report Search </h3>
                </div>
                <form action="{{ url('/superadmin/reports/search') }}" method="get">
                  <div class="card-body">
                    <div class="row">
                    <div class="form-group col-md-3">
                      <label for="exampleInputEmail1">From Date</label>
                      <input type="date" class="form-control" value="{{date('Y-m-d')}}" id="start_date" name="start_date" required  >
                    </div>
                    <div class="form-group col-md-3">
                      <label for="exampleInputEmail1">To Date</label>
                      <input type="date" class="form-control" value="{{date('Y-m-d')}}" id="end_date" name="end_date" required>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="exampleInputPassword1">Question Type</label>
                      <select class="form-control" name="question_id">
                      <option value="">Selection Question</option>
                      <option value="1">Question 1</option>
                      <option value="2">Question 2</option>
                      <option value="3">Question 3</option>

                      </select>
                      </div>
                    <!-- <div class="form-group col-md-3">
                      <label for="exampleInputPassword1">User Name</label>

                      <select class="form-control" name="user_id">
                        <option selected="" disabled="">Select Users</option>
                        @foreach ($users as $user )
                        <option value="{{$user->id}}">{{$user->name}}</option>

                        @endforeach
                        </select>
                      </div> -->

                   
                    <div class="form-group col-md-3">
                       <button type="submit" class="btn btn-success" style="margin-top: 30px;">Search</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>


          </div>
        </div>
      </div>
    </section>
  </div>


@endsection