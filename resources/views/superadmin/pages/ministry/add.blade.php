@extends('layouts.app')

@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="m-0 text-dark">Ministry Create</h1>
</div><!-- /.col -->
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Ministry Create</li>
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
<div class="card-header">
<a class="btn btn-success float-right btn-sm" href="{{ url('superadmin/ministry/list') }}"><i class="fa fa-plus-circle"></i>Ministry List</a>
</div>
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<div class="card-body">
<form action="{{ route('superadmin.ministry.store') }}" method="post" class="forms-sample"  enctype="multipart/form-data">
@csrf
<div class="form-row">
@php
$ministies=DB::table('name_of_ministry')->get();
@endphp
<div class="form-group col-md-4">
<label>Name of Ministry *</label>
<select name="ministry_id" class="form-control" id="">
@foreach($ministies as $ministy)

<option value="{{$ministy->id}}">{{$ministy->name}} </option>
@endforeach
</select>

</div>


<div class="form-group col-md-4">
<label>Division/Department</label>
<select name="division_id" class="form-control" id="">
<option value="">Select Division</option>
<option value="PSD">PSD</option>
<option value="SSD">SSD</option>                            
</select>
</div>
<div class="form-group col-md-4">

</div>


<div class="form-group col-md-3">
<label> Focal Person 1 Name  *</label>
<input type="text" class="form-control" name="focal_person_name_one" placeholder=" Focal Person 1 Name" value="{{ old('focal_person_name_one') }}">

</div>
<div class="form-group col-md-3">
<label>Focal Person 1 Designation </label>
<input type="text" name="designation_one"  class="form-control" placeholder="Focal Person 1 Designation " value="{{ old('designation_one') }}">
</div>
<div class="form-group col-md-3">
<label> Focal Person 1 Telephone/Mobile *</label>
<input type="text" name="focal_person_number_one" value="{{ old('focal_person_number_one') }}"  class="form-control" placeholder="Focal Person 1 Telephone/Mobile">

</div>


<div class="form-group col-md-3">
<label> Focal Person 1 E-Mail</label>
<input type="text" name="email"  class="form-control"  placeholder="Focal Person 1 E-Mail" value="{{ old('email') }}">

</div>
<div class="form-group col-md-3">
<label>Focal Person 2 Name   </label>
<input type="text" name="focal_person_name_two" placeholder="Focal Person 2 Name  " class="form-control" value="{{ old('focal_person_name_two') }}">

</div>
<div class="form-group col-md-3">
<label>Focal Person 2 Designation </label>
<input type="text" name="designation_two"  class="form-control" placeholder="Focal Person 2 Designation " value="{{ old('designation_two') }}">
</div>
<div class="form-group col-md-3">
<label>Focal Person 2 Telephone/Mobile</label>
<input type="text" name="focal_person_number_two"  class="form-control" placeholder="Focal Person 2 Telephone/Mobile" value="{{ old('focal_person_number_two') }}">
</div>

<div class="form-group col-md-3">
<label> Focal Person 2 E-Mail</label>
<input type="text" name="focal_person_email_two"  class="form-control" placeholder="Focal Person 2 E-Mail" value="{{ old('focal_person_email_two') }}">
</div>

<div class="form-group col-md-3">
<label> Focal Person 3 Name </label>
<input type="text" name="focal_person_name_three" value="{{ old('focal_person_name_three') }}" class="form-control" placeholder="Focal Person 3 Name">

</div>
<div class="form-group col-md-3">
<label> Focal person 3 Designation </label>
<input type="text" name="designation_three"  class="form-control" placeholder="Focal person 3 Designation" value="{{ old('designation_three') }}">
</div>

<div class="form-group col-md-3">
<label> Focal Person 3 Telephone/Mobile </label>
<input type="text" name="focal_person_number_three"  class="form-control" placeholder="Focal Person 3 Telephone/Mobile " value="{{ old('focal_person_number_three') }}">
</div>
<div class="form-group col-md-3">
<label> Focal person 3 E-Mail </label>
<input type="email" name="focal_person_email_three"  class="form-control" placeholder="Focal person 3 E-Mail " value="{{ old('focal_person_email_three') }}">
</div>

<div class="form-group col-md-3">
<label>Role *</label>
<select class="form-control" name="roles" required="">
<option selected="" disabled="">Select Role</option>
@foreach ($roles as $role )
<option value="{{$role->id}}">{{$role->name}}</option>

@endforeach
</select>
</div>

</div>
</div>

<div class="form-group col-md-12">
<button type="submit" class="btn btn-primary  float-right">Save</button>
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


