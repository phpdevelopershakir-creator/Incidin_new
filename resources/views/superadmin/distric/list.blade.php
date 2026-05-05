
@extends('layouts.app')

@section('content')

        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              District List
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('superadmin.add.district')}}" class="btn btn-outline-primary">District Create</a></li>
              
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">District  List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>district Name </th>
                            <th>district Bangla.</th>
                            <th>Division Name </th>
                            <th>Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($districs as $district )
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                        <td>{{ $district->name }}</td>
                        <td>{{ $district->bn_name }}</td>
                        <td>{{ $district->division->name ?? '' }} {{ $district->division->bn_name ?? '' }}</td>
                        </td>
                       
                    
                        <td>
                            <a href="{{ route('superadmin.edit.district',$district->id) }}" class="btn btn-outline-primary">Edit</a>
                            <a href="{{ route('superadmin.delete.district',$district->id) }}" class="btn btn-outline-danger" id="delete">Delete</a>
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