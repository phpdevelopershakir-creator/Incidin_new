@if(Auth::user()->can('60.question'))
@php
$sixties=DB::table('captured_questionnaire_q60')->latest()->limit(1)->get();

@endphp
<div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">

      <h3 class="card-title">60.Please provide any other information which could not be captured in the questionnaire (not more than 500)</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    @foreach($sixties as $sixty)
    <div class="card-body">
      <h6>Additional information from Police HQ</h6>
      <textarea class="form-control"  name="description" id="summernote"  placeholder="This is some sample content." rows="3">
         
       
           {!!$sixty->description_60!!}
       
      </textarea>
    
      


      <br>


    </div>
    @endforeach

    <!--<div class="card-body">-->
    <!--  <h6>Additional information from BGB</h6>-->
    <!--  <textarea class="form-control" id="editor" name="description" placeholder="This is some sample content." rows="3"></textarea>-->
      


    <!--  <br>-->


    <!--</div>-->
  </div>
</div>

@endif