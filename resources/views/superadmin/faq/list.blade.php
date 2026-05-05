@extends('layouts.app')

@section('content')

        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
          Question Answer
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('superadmin/add/faq') }}" class="btn btn-outline-primary">Create New </a></li>
              
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"> Question Answer</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Question</th>
                          <th>Answer</th>
                          <th>Status</th>
                          <th>Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($faqs as $value )
                        <tr>
                         <td>{{ $value->id}}</td>
                         <td>{{ $value->question }}</td>
                         <td>{{ $value->answer }}</td>

                        <td class="text-center">
                      @if($value->is_active == 1)
                          <span class="badge bg-success mb-1 d-inline-block">
                              Active
                          </span>
                      @else
                          <span class="badge bg-danger mb-1 d-inline-block">
                              Inactive
                          </span>
                      @endif

                      <br>

                     
                  </td>
                        <td>
                            <a href="{{ route('superadmin.edit.faq',$value->id) }}" class="btn btn-outline-primary">Edit</a>
                            <a href="{{ route('superadmin.delete.faq',$value->id) }}" class="btn btn-outline-danger" id="delete">Delete</a>
                          
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