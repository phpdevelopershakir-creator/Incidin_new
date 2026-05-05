

@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Case List</h1>
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
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Case List All </h3>
              </div>
              <div class="card-body p-0">
              <table class="table table-sm">
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
                        <td>{{ ++$key }}</td>
                        <td>{{ $value->caseid }}</td>
                        <td>{{ $value->user->name ?? '' }}</td>
                        <td>{{ $value->created_at }}</td>
                        <td>{{ $value->updated_at }}</td>
            
                       
                    
                        <td>
                            <a href="{{ route('superadmin.user.casewish',$value->id) }}" class="btn btn-info">View</a>
                            
                            
                            
                        </td>



                      </tr>
                    @endforeach
                  </tbody>
                </table>
                <div style="padding: 10px; float:right">
                  {!! $cases->links() !!}
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


</div>
@endsection