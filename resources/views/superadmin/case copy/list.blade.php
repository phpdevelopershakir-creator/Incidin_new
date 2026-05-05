
@extends('layouts.app')

@section('content')

        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
             Case List All
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('superadmin/case/create')}}" class="btn btn-outline-primary">Case Create</a></li>
              
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Case  List</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Case ID</th>
                            <th>Case Created By</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($cases as $key=>$value )
                        <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $value->caseid }}</td>
                        <td> {{ $value->user->name ?? '' }} </td>
                        <td>{{ $value->created_at }}</td>
                        <td>{{ $value->updated_at }}</td>

                     
                       
                    
                        <td>
                                <a href="{{ route('superadmin.view.case',$value->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('superadmin.case.delete',$value->id) }}" class="btn btn-danger" id="delete">Delete</a>
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