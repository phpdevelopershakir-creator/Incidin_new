@extends('layouts.app')
@section('content')
 

 <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Case View 
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/case/list')}}" class="btn btn-primary">Case List</a></li>
                
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Case</h4>
                  <p class="card-description">Use class <code>.accordion-bordered</code> for bordered accordions</p>
                    

                  <div class="mt-4">
                    <div class="accordion accordion-bordered" id="accordion-2" role="tablist">
                     @include('superadmin.case.view.1view')
                     @include('superadmin.case.view.2view')
                     @include('superadmin.case.view.3view') 
                     @include('superadmin.case.view.4view') 
                     @include('superadmin.case.view.5view')
                     @include('superadmin.case.view.6view')
                     @include('superadmin.case.view.7view')
                     @include('superadmin.case.view.8view')
                     @include('superadmin.case.view.9view')
                     @include('superadmin.case.view.11view')
                     @include('superadmin.case.view.15view')
                     @include('superadmin.case.view.16view')
                     @include('superadmin.case.view.18view')
                     @include('superadmin.case.view.19view')
                     @include('superadmin.case.view.23view')
                     @include('superadmin.case.view.28view')
                     @include('superadmin.case.view.53view')
                     @include('superadmin.case.view.54view')
                     @include('superadmin.case.view.55view')
                     @include('superadmin.case.view.57view')
                     @include('superadmin.case.view.59view')
                     @include('superadmin.case.view.60view')
                      @include('superadmin.case.view.63view')

                     
                      
                    


                
                   
                  

                    </div>
                  </div>
                  
                </div>
              </div>
            </div>


          </div>
        </div>

@endsection
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function(){
        $(".sevenstatus").on("click",function(){
            var statusvalue = $("input[name='is_address_trafficking_q7']:checked").val();
            $('.question7').find('.othersText').hide()
            $('.question7').find('#q7others').val("")
            if(statusvalue == '1'){
              $('.question7').find('#seven_question_view').show()
              $('.question7').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question7').find('#seven_question_view').hide()
              $('.question7').find('span').removeClass('othersText')
              $('.question7').find('span').show()

            }
            else{
              $('.question7').find('#seven_question_view').hide()
              $('.question7').find('span').addClass('othersText')


            }
        });
    });

</script>
