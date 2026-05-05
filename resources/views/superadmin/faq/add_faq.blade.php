@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Question Answer

        </h3>
        <div class="col-sm-6" style="text-align: right">
            <a href="{{ url('superadmin/all/faq') }}" class="btn btn-primary">All Question Answer</a>
        </div>

    </div>
    <div class="form-row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <form class="forms-sample" action="{{ url('superadmin/store/faq') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Question*</label>
                                    <input type="text" name="question" class="form-control form-control-sm" value="{{ old('question') }}" id="exampleInputUsername1"
                                        placeholder="Question  Name">
                                    <p style="color:red">{{ $errors->first('question') }}</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Answer*</label>
                                    <input type="text" name="answer" class="form-control form-control-sm" value="{{ old('answer') }}" id="exampleInputUsername1"
                                        placeholder="Question  Answer">
                                    <p style="color:red">{{ $errors->first('answer') }}</p>
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Status</label>
                                    <select name="is_active" id="" class="form-control" required="">
                                        <option value="" disabled>Status Select </option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                    <p style="color:red">{{ $errors->first('is_active') }}</p>
                                </div>
                            </div>


                        </div>





                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>






    </div>
</div>




@endsection