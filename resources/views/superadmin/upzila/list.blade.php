
@extends('layouts.app')

@section('content')

        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Upazila List
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('superadmin.add.upazila')}}" class="btn btn-outline-primary">Upazila Create</a></li>
              
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Upazila  List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Upazila Name </th>
                            <th>Upazila Bangla.</th>
                            <th>Upazila url </th>
                            <th>District Name </th>
                            <th>Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($upzilas as $upazila )
                        <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $upazila->name }}</td>
                        <td>{{ $upazila->bn_name }}</td>
                        <td>{{ $upazila->url }}</td>
                        <td>{{ $upazila->distric->name ?? '' }} {{ $upazila->distric->bn_name ?? '' }}</td>
                        </td>
                       
                    
                        <td>
                            <a href="{{ route('superadmin.edit.upazila',$upazila->id) }}" class="btn btn-outline-primary">Edit</a>
                            <a href="{{ route('superadmin.delete.upazila',$upazila->id) }}" class="btn btn-outline-danger" id="delete">Delete</a>
                        </td>

                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection