
@extends('layouts.app')

@section('content')

        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Union List
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('superadmin.add.union')}}" class="btn btn-outline-primary">Union Create</a></li>
              
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Union  List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Union Name </th>
                            <th>Union Bangla.</th>
                            <th>Union url </th>
                            <th>Upazila Name </th>
                            <th>Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($unions as $union )
                        <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $union->name }}</td>
                        <td>{{ $union->bn_name }}</td>
                        <td>{{ $union->url }}</td>
                        <td>{{ $union->uapzila->name ?? '' }} {{ $union->uapzila->bn_name ?? '' }}</td>
                        </td>
                       
                    
                        <td>
                            <a href="{{ route('superadmin.edit.union',$union->id) }}" class="btn btn-outline-primary">Edit</a>
                            <a href="{{ route('superadmin.delete.union',$union->id) }}" class="btn btn-outline-danger" id="delete">Delete</a>
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