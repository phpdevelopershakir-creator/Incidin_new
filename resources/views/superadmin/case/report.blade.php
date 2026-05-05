@extends('layouts.app')

@section('content')

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Report List</h1>
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
              <h3 class="card-title">Report List All </h3>
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
                    @if(auth()->user()->user_type == "Super Admin")
                    <th>Role Name</th>
                    @endif
                    <th>Action </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($reports as $key => $value)
            <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $value->caseid }}</td>
            <td>{{ $value->user->name ?? ''}}</td>
            <td>{{ $value->created_at }}</td>
            <td>{{ $value->updated_at }}</td>
            @if(auth()->user()->user_type == "Super Admin")  
            <td>
          <select class="form-control" id="role_{{$value->id}}" name="user_id">
          <option selected="" disabled="">Select Role</option>
          @foreach ($roles as $role)
          <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
                </select>
              </td>
              @endif
            <td>
              <form class="pdf_download_form" action="{{route('superadmin.case.invoice', $value->id)}}">
                <button id="pdfDownload" data-id="{{$value->id}}" type="submit"
                  class="btn btn-primary pdfDownload">PDF Download</button>
              </form>
              <!-- <a href="{{ route('superadmin.case.csv', $value->id) }}" class="btn btn-success">CSV Download </a> -->

            </td>



            </tr>
          @endforeach
                </tbody>
              </table>
              <div style="padding: 10px; float:right">
                {!! $reports->links() !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"
  crossorigin="anonymous"></script>

<script type="text/javascript">
  $(document).ready(function () {
    $('.pdf_download_form').submit(function (e) {
      e.preventDefault()
      let id = $(this).closest('form').find('.pdfDownload').attr('data-id')
      let roleId=$('#role_' + id).val()
      if(roleId!=='' && roleId!==null){
      
      var actionUrl = $(this).attr('action')+'?user_id='+roleId;
      window.open(actionUrl); 
      }else{
        alert("Please Select a Role")
      }
      return false; 

     // });
    });
  });
</script>