
@extends('layouts.app')

@section('content')

        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
          Question List
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('superadmin/add/question') }}" class="btn btn-outline-primary">Create New Question</a></li>
              
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Question List All</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table  class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Question Title</th>
                          <th>Status</th>
                          <th>Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($questiontitles as $value )
                        <tr>
                         <td>{{ $value->id}}</td>
                         <td>{{ $value->title }}</td>

                        <td class="text-center">
                      @if($value->status == 1)
                          <span class="badge bg-success mb-1 d-inline-block">
                              Active
                          </span>
                      @else
                          <span class="badge bg-danger mb-1 d-inline-block">
                              Inactive
                          </span>
                      @endif

                 
                      
                  </td>
                        <td>
                            <a href="{{ route('superadmin.edit.question',$value->id) }}" class="btn btn-outline-primary">Edit</a>
                          <a href="{{ route('question-title.status', $value->id) }}"
                        class="btn btn-sm btn-outline-primary mt-1">
                          Change Status
                      </a>
                        <!-- <a href="{{ route('superadmin.delete.question',$value->id) }}" class="btn btn-outline-primary">Delete</a> -->
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