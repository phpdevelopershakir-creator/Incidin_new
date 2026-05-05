@extends('layouts.app')
@section('content')
<style>
.ck-editor__editable_inline {
    height: 200px;
}
.ck-editor__editable_inline p
{
  font-size: 12px !important;
}
.otherSpecify{
  display:none
}
</style>
<script type="text/javascript" href="{{ asset('admin/plugins/ckeditor.js') }}"></script>
@php
$districs=DB::table('districs')->get();
@endphp

</style>

<style>
  table {
    width: 100%;
    border-spacing: 0;
    border-collapse: collapse;
  }

  td,
  th {
    padding: 0.5rem 1rem;
    border: solid 1px;
  }

  th {
    background-color: #eee;
  }

  .divNew {
    padding-top: 0.1rem;
    display: inline-table;
  }
</style>



<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-10">
          <h3 class="m-0 text-dark">Please fill-up the form in below. By clicking on the <button type="button" class="btn btn-secondary">+</button> symbol on the right side of the questions  the questions will be opened for providing data</h3>
        </div>
        <div class="col-sm-2 collapsed-card">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
<br>
  <section class="content">
    <div class="container-fluid">
      <form action="{{url('superadmin/case/store')}}" id="form" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">

          <input type="hidden" name="caseid" value="{{ date('ymdhis') }}">
          <h4 style="padding-Left:10px; font-weight:bold">SITUATION OF HUMAN TRAFFICKING  </h4>
          @include('superadmin.case.question.superadminquestion')

         @php
         $questiontitles=DB::table('question_title')->get();
         @endphp
         
          @include('superadmin.case.question.1question')
          @include('superadmin.case.question.2question')
          @include('superadmin.case.question.3question') 
<br> <br>
    <h4 style="padding-Left:10px; font-weight:bold">PREVENTION </h4>
   

     @include('superadmin.case.question.4question') 
     @include('superadmin.case.question.5question')
    <!-- question no 6 Start -->
    @include('superadmin.case.question.6question')


    <!-- question no 7 Start -->
    @include('superadmin.case.question.7question')
    <!-- question no 7 end -->



    <!-- question no 8 Start -->
   @include('superadmin.case.question.8question')
    <!-- question no 8 end -->

  <!-- question no 9 Start -->
  @include('superadmin.case.question.9question')
    <!-- question no 10 end -->
  @include('superadmin.case.question.10question')
    <!-- question no 10 end -->


    <!-- question no 11 Start  -->
    @include('superadmin.case.question.11question')
    <!-- question no 11 end -->


    <!-- question no 12 Start -->
    @include('superadmin.case.question.12question')
    <!-- question no 12 end -->


    <!-- question no 13 Start -->
    @include('superadmin.case.question.13question')
    <!-- question no 13 end -->


    <!-- question no 14 Start -->
    @include('superadmin.case.question.14question')
    <!-- question no 14 end -->


    <!-- question no 15 Start -->
    @include('superadmin.case.question.15question')
    <!-- question no 15 end -->
    
    <!-- question no 16  -->
    @include('superadmin.case.question.16question')
    <!-- question no 16 end -->
    @include('superadmin.case.question.17question')
    <!-- question no 17 end -->

    <!-- question no 18 Start -->
    
   @include('superadmin.case.question.18question')
    <!-- question no 18 end -->

    <!-- question no 19 Start -->
 @include('superadmin.case.question.19question')
    <!-- question no 19 end -->

    <!-- question no 20 Start -->
    @include('superadmin.case.question.20question')
    <!-- question no 20 end -->

    <!-- question no 21 Start -->
    <br><br>
    <h4 style="padding-Left:10px; font-weight:bold"> PROTECTION </h4>
    @include('superadmin.case.question.21question')
    <!-- question no 21 end -->

    <!-- question no 22 Start -->
    @include('superadmin.case.question.22question')
    <!-- question 22 end -->



    <!-- question 23  start -->
    @include('superadmin.case.question.23question')
    <!-- question 23 end -->
    <!-- question 24 -->
    
    <!-- question 24 end -->
    @include('superadmin.case.question.24question')

    <!-- question 25 start  -->
   @include('superadmin.case.question.25question')
    <!-- question no 25 end  -->


    <!-- question no 26 Start  -->
    @include('superadmin.case.question.26question')
    <!-- question no 26 end  -->


    <!-- question no 27 Start  -->
    @include('superadmin.case.question.27question')
    <!-- question no 27 end -->


    <!-- question no 28 Start  -->
    @include('superadmin.case.question.28question')
    <!-- question no 28 end please recheck  -->

    <!-- question no 29 end -->
    @include('superadmin.case.question.29question')
    <!-- question no 29 end -->


    <!-- question no 30 Start -->
    @include('superadmin.case.question.30question')
    <!-- question no 30 end -->

    <!-- question no 31 Start -->
    @include('superadmin.case.question.31question')
    <!-- question no 31 end -->

    <!-- question no 32 Start -->
    <br><br>
    <h4 style="padding-Left:10px; font-weight:bold">PROSECUTION</h4>
    @include('superadmin.case.question.32question')
    <!-- question no 32 End -->


    <!-- question no 33 Start -->
    @include('superadmin.case.question.33question')
    <!-- question no 33 end -->

    <!-- question no 34 Start -->
    @include('superadmin.case.question.34question')
    <!-- question no 34 end -->
    <!-- question no 35 Start -->
    @include('superadmin.case.question.35question')
    <!-- question no 35 End -->

    <!-- question no 36 Start -->
    @include('superadmin.case.question.36question')
    <!-- question no 36 End -->


    <!-- question no 37 Start -->
    @include('superadmin.case.question.37question')
 
    <!-- question no 37 End -->

    <!-- question no 38 Start -->
 @include('superadmin.case.question.38question')
    <!-- question no 38 End -->

    <!-- question no 39 Start -->
   
    @include('superadmin.case.question.39question')


    <!-- question no 39 end -->
    @include('superadmin.case.question.40question')
    <!-- question no 40 end -->
    @include('superadmin.case.question.41question')
    <!-- qestion no 41 end -->
  @include('superadmin.case.question.42question')

  @include('superadmin.case.question.43question')


    <!-- question no 43 end -->
    @include('superadmin.case.question.44question')
   
    <!-- question no 44 end -->

    @include('superadmin.case.question.45question')
    <!-- question no 45 end -->


    @include('superadmin.case.question.46question')
   
    <!-- question no 47 -->
    @include('superadmin.case.question.47question')


@include('superadmin.case.question.48question')
@include('superadmin.case.question.49question')

    <!-- question no 49 end -->
    @include('superadmin.case.question.50question')
    <!-- question no 50 end -->

    @include('superadmin.case.question.51question')
    <!-- question no 51end -->



    @include('superadmin.case.question.52question')
    
    @include('superadmin.case.question.53question')
    <!-- question no 53 end -->

@if(Auth::user()->user_type == "Super Admin")

<h4 style="padding-Left:10px; font-weight:bold">PARTNERSHIP </h4>
@endif

  @include('superadmin.case.question.54question')
  @include('superadmin.case.question.55question')
  @include('superadmin.case.question.56question')
  @include('superadmin.case.question.57question')
@include('superadmin.case.question.58question')
    <br> <br><br>
    <h4 style="padding-Left:10px; font-weight:bold">RECOMMENDATIONS  </h4> 
   
    @include('superadmin.case.question.59question')
@include('superadmin.case.question.60question')
<br><br>
<button type="submit " class="btn btn-primary" >Upload & Save</button>
<!-- <button type="submit " class="btn btn-primary" id="uploadsave">Upload & Save</button>  -->
<br><br>
</form>
</section>



</div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>

<script type="text/javascript">
  $('.numbering').each(function(index) {
    $(this).text(index + 1);
  });
</script>

<script>
  ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .then( editor => {
                  console.log( editor );
          } )
          .catch( error => {
                  console.error( error );
          } );
</script>
<script>
  $(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    
    // Event listeners for each group of inputs
    $(document).on('input', '.number-input', function() {
      updateTotal('.number-input', '#totalSum');
      updateTotal('.question18rowmen', '#eighteen_twenty_eight');
      updateTotal('.granTotal', '#eighteen_thirty_one');
    });

    $(document).on('input', '.question18rowWomen', function() {
      updateTotal('.question18rowWomen', '#eighteen_twenty_nine');
      updateTotal('.granTotal', '#eighteen_thirty_one');

    });
    

    $(document).on('input', '.question18rowTransGender', function() {
      updateTotal('.question18rowTransGender', '#eighteen_thirty');
      updateTotal('.granTotal', '#eighteen_thirty_one');

    });

    

    $(document).on('input', '.number-input2', function() {
      updateTotal('.number-input2', '#totalSum1');
      updateTotal('.question18rowmen', '#eighteen_twenty_eight');
      updateTotal('.granTotal', '#eighteen_thirty_one');

    });

    $(document).on('input', '.number-input3', function() {
      updateTotal('.number-input3', '#totalSum2');
      updateTotal('.question18rowmen', '#eighteen_twenty_eight');
      updateTotal('.granTotal', '#eighteen_thirty_one');

    });

    $(document).on('input', '.number-input4', function() {
      updateTotal('.number-input4', '#totalSum3');
      updateTotal('.question18rowmen', '#eighteen_twenty_eight');
      updateTotal('.granTotal', '#eighteen_thirty_one');

    });

    $(document).on('input', '.number-input5', function() {
      updateTotal('.number-input5', '#totalSum4');
    });

    $(document).on('input', '.number-input6', function() {
      updateTotal('.number-input6', '#totalSum5');
    });



    // Initial calculation for each group
    updateTotal('.number-input', '#totalSum');
    updateTotal('.number-input2', '#totalSum1');
    updateTotal('.number-input3', '#totalSum2');
    updateTotal('.number-input4', '#totalSum3');
    updateTotal('.number-input5', '#totalSum4');
    updateTotal('.number-input6', '#input6');

    

    $(document).ready(function(){
        $(".twentystatus").on("click",function(){
            var statusvalue = $("input[name='is_peacekeeping_q20']:checked").val();
            $('.question20').find('.othersText').hide()
            $('.question20').find('#q20others').val("")
            if(statusvalue == '1'){
              $('.question20').find('#twenty_question_view').show()
              $('.question20').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question20').find('#twenty_question_view').hide()
              $('.question20').find('span').removeClass('othersText')
              $('.question20').find('span').show()
            }else{
              $('.question20').find('#twenty_question_view').hide()
              $('.question20').find('span').addClass('othersText')

            }
        });
    });

    $(document).ready(function(){
        $(".threestatus").on("click",function(){
            var statusvalue = $("input[name='is_sex_trafficking_climate_cgn_q3']:checked").val();
            if(statusvalue == '1'){
              $('.question3').find('#three_question_view').show()
            }else{
              $('.question3').find('#three_question_view').hide()
            }
        });
    });

    $('#q3_initiative_mitigate_risk').on("change",function(){
          $('.question3').find('#initiative_mitigate_risk').hide()
          $('.question3').find('#initiative_mitigate_risk').val("")
          if($(this).val()==="13"){
            $('.question3').find('#initiative_mitigate_risk').show()
          }
        });
    $('#q3_loss_livelihood').on("change",function(){
      $('.question3').find('#loss_livelihood').hide()
      $('.question3').find('#loss_livelihood').val("")
      if($(this).val()==="13"){
        $('.question3').find('#loss_livelihood').show()
      }
    });
    $('#q3_loss_arable_land').on("change",function(){
      $('.question3').find('#loss_arable_land').hide()
      $('.question3').find('#loss_arable_land').val("")
      if($(this).val()==="13"){
        $('.question3').find('#loss_arable_land').show()
      }
    });
    $('#q3_loss_agriculture').on("change",function(){
      $('.question3').find('#loss_agriculture').hide()
      $('.question3').find('#loss_agriculture').val("")
      if($(this).val()==="13"){
        $('.question3').find('#loss_agriculture').show()
      }
    });
    $('#q3_risk_associated_debt').on("change",function(){
      $('.question3').find('#risk_associated_debt').hide()
      $('.question3').find('#risk_associated_debt').val("")
      if($(this).val()==="13"){
        $('.question3').find('#risk_associated_debt').show()
      }
    });
    $('#q3_increased_poverty').on("change",function(){
      $('.question3').find('#risk_increased_poverty').hide()
      $('.question3').find('#risk_increased_poverty').val("")
      if($(this).val()==="13"){
        $('.question3').find('#risk_increased_poverty').show()
      }
    });

    $('#q3_loss_housing').on("change",function(){
      $('.question3').find('#risk_loss_housing').hide()
      $('.question3').find('#risk_loss_housing').val("")
      if($(this).val()==="13"){
        $('.question3').find('#risk_loss_housing').show()
      }
    });
    $('#q3_others_specify_one').on("change",function(){
      $('.question3').find('#others_specify_one').hide()
      $('.question3').find('#others_specify_one').val("")
      if($(this).val()==="13"){
        $('.question3').find('#others_specify_one').show()
      }
    });
    $('#q3_others_specify_two').on("change",function(){
      $('.question3').find('#others_specify_two').hide()
      $('.question3').find('#others_specify_two').val("")
      if($(this).val()==="13"){
        $('.question3').find('#others_specify_two').show()
      }
    });
    $('#q3_others_specify_three').on("change",function(){
      $('.question3').find('#others_specify_three').hide()
      $('.question3').find('#others_specify_three').val("")
      if($(this).val()==="13"){
        $('.question3').find('#others_specify_three').show()
      }
    });
    //q4 first
    $('#q4_prevention_first_issue').on("change",function(){
      $('.question4').find('#prevention_first_issue').hide()
      $('.question4').find('#prevention_first_issue').val("")
      if($(this).val()==="14"){
        $('.question4').find('#prevention_first_issue').show()
      }
    });
    $('#q4_protection_first_issue_one').on("change",function(){
      $('.question4').find('#protection_first_issue_one').hide()
      $('.question4').find('#protection_first_issue_one').val("")
      if($(this).val()==="14"){
        $('.question4').find('#protection_first_issue_one').show()
      }
    });
    $('#q4_prosecution_first_issue').on("change",function(){
      $('.question4').find('#prosecution_first_issue').hide()
      $('.question4').find('#prosecution_first_issue').val("")
      if($(this).val()==="14"){
        $('.question4').find('#prosecution_first_issue').show()
      }
    });
    $('#q4_protection_first_issue_two').on("change",function(){
      $('.question4').find('#protection_first_issue_two').hide()
      $('.question4').find('#protection_first_issue_two').val("")
      if($(this).val()==="14"){
        $('.question4').find('#protection_first_issue_two').show()
      }
    });
    $('#q4_partnership_first_issue').on("change",function(){
      $('.question4').find('#partnership_first_issue').hide()
      $('.question4').find('#partnership_first_issue').val("")
      if($(this).val()==="14"){
        $('.question4').find('#partnership_first_issue').show()
      }
    });
    $('#q4_mnpa_first_issue').on("change",function(){
      $('.question4').find('#mnpa_first_issue').hide()
      $('.question4').find('#mnpa_first_issue').val("")
      if($(this).val()==="14"){
        $('.question4').find('#mnpa_first_issue').show()
      }
    });
    $('#q4_npa_first_issue').on("change",function(){
      $('.question4').find('#npa_first_issue').hide()
      $('.question4').find('#npa_first_issue').val("")
      if($(this).val()==="14"){
        $('.question4').find('#npa_first_issue').show()
      }
    });
    $('#q4_nrm_first_issue').on("change",function(){
      $('.question4').find('#nrm_first_issue').hide()
      $('.question4').find('#nrm_first_issue').val("")
      if($(this).val()==="14"){
        $('.question4').find('#nrm_first_issue').show()
      }
    });
    $('#q4_mla_first_issue').on("change",function(){
      $('.question4').find('#mla_first_issue').hide()
      $('.question4').find('#mla_first_issue').val("")
      if($(this).val()==="14"){
        $('.question4').find('#mla_first_issue').show()
      }
    });

    $('#q4_tip_report_first_issue').on("change",function(){
      $('.question4').find('#tip_report_first_issue').hide()
      $('.question4').find('#tip_report_first_issue').val("")
      if($(this).val()==="14"){
        $('.question4').find('#tip_report_first_issue').show()
      }
    });
    $('#q4_others_specify_first_issue_one').on("change",function(){
      $('.question4').find('#others_specify_first_issue_one').hide()
      $('.question4').find('#others_specify_first_issue_one').val("")
      if($(this).val()==="14"){
        $('.question4').find('#others_specify_first_issue_one').show()
      }
    });
    $('#q4_others_specify_first_issue_two').on("change",function(){
      $('.question4').find('#others_specify_first_issue_two').hide()
      $('.question4').find('#others_specify_first_issue_two').val("")
      if($(this).val()==="14"){
        $('.question4').find('#others_specify_first_issue_two').show()
      }
    });
    //q4 second
    $('#q4_prevention_second_issue').on("change",function(){
      $('.question4').find('#prevention_second_issue').hide()
      $('.question4').find('#prevention_second_issue').val("")
      if($(this).val()==="14"){
        $('.question4').find('#prevention_second_issue').show()
      }
    });
    $('#q4_protection_second_issue_one').on("change",function(){
      $('.question4').find('#protection_second_issue_one').hide()
      $('.question4').find('#protection_second_issue_one').val("")
      if($(this).val()==="14"){
        $('.question4').find('#protection_second_issue_one').show()
      }
    });
    $('#q4_prosecution_second_issue').on("change",function(){
      $('.question4').find('#prosecution_second_issue').hide()
      $('.question4').find('#prosecution_second_issue').val("")
      if($(this).val()==="14"){
        $('.question4').find('#prosecution_second_issue').show()
      }
    });
    $('#q4_protection_second_issue_two').on("change",function(){
      $('.question4').find('#protection_second_issue_two').hide()
      $('.question4').find('#protection_second_issue_two').val("")
      if($(this).val()==="14"){
        $('.question4').find('#protection_second_issue_two').show()
      }
    });
    $('#q4_partnership_second_issue').on("change",function(){
      $('.question4').find('#partnership_second_issue').hide()
      $('.question4').find('#partnership_second_issue').val("")
      if($(this).val()==="14"){
        $('.question4').find('#partnership_second_issue').show()
      }
    });
    $('#q4_mnpa_second_issue').on("change",function(){
      $('.question4').find('#mnpa_second_issue').hide()
      $('.question4').find('#mnpa_second_issue').val("")
      if($(this).val()==="14"){
        $('.question4').find('#mnpa_second_issue').show()
      }
    });
    $('#q4_npa_second_issue').on("change",function(){
      $('.question4').find('#npa_second_issue').hide()
      $('.question4').find('#npa_second_issue').val("")
      if($(this).val()==="14"){
        $('.question4').find('#npa_second_issue').show()
      }
    });
    $('#q4_nrm_second_issue').on("change",function(){
      $('.question4').find('#nrm_second_issue').hide()
      $('.question4').find('#nrm_second_issue').val("")
      if($(this).val()==="14"){
        $('.question4').find('#nrm_second_issue').show()
      }
    });
    $('#q4_mla_second_issue').on("change",function(){
      $('.question4').find('#mla_second_issue').hide()
      $('.question4').find('#mla_second_issue').val("")
      if($(this).val()==="14"){
        $('.question4').find('#mla_second_issue').show()
      }
    });

    $('#q4_tip_report_second_issue').on("change",function(){
      $('.question4').find('#tip_report_second_issue').hide()
      $('.question4').find('#tip_report_second_issue').val("")
      if($(this).val()==="14"){
        $('.question4').find('#tip_report_second_issue').show()
      }
    });
    $('#q4_others_specify_second_issue_one').on("change",function(){
      $('.question4').find('#others_specify_second_issue_one').hide()
      $('.question4').find('#others_specify_second_issue_one').val("")
      if($(this).val()==="14"){
        $('.question4').find('#others_specify_second_issue_one').show()
      }
    });
    $('#q4_others_specify_second_issue_two').on("change",function(){
      $('.question4').find('#others_specify_second_issue_two').hide()
      $('.question4').find('#others_specify_second_issue_two').val("")
      if($(this).val()==="14"){
        $('.question4').find('#others_specify_second_issue_two').show()
      }
    });
    // q4 third
    $('#q4_prevention_third_issue').on("change",function(){
      $('.question4').find('#prevention_third_issue').hide()
      $('.question4').find('#prevention_third_issue').val("")
      if($(this).val()==="14"){
        $('.question4').find('#prevention_third_issue').show()
      }
    });
    $('#q4_protection_third_issue_one').on("change",function(){
      $('.question4').find('#protection_third_issue_one').hide()
      $('.question4').find('#protection_third_issue_one').val("")
      if($(this).val()==="14"){
        $('.question4').find('#protection_third_issue_one').show()
      }
    });
    $('#q4_prosecution_third_issue').on("change",function(){
      $('.question4').find('#prosecution_third_issue').hide()
      $('.question4').find('#prosecution_third_issue').val("")
      if($(this).val()==="14"){
        $('.question4').find('#prosecution_third_issue').show()
      }
    });
    $('#q4_protection_third_issue_two').on("change",function(){
      $('.question4').find('#protection_third_issue_two').hide()
      $('.question4').find('#protection_third_issue_two').val("")
      if($(this).val()==="14"){
        $('.question4').find('#protection_third_issue_two').show()
      }
    });
    $('#q4_partnership_third_issue').on("change",function(){
      $('.question4').find('#partnership_third_issue').hide()
      $('.question4').find('#partnership_third_issue').val("")
      if($(this).val()==="14"){
        $('.question4').find('#partnership_third_issue').show()
      }
    });
    $('#q4_mnpa_third_issue').on("change",function(){
      $('.question4').find('#mnpa_third_issue').hide()
      $('.question4').find('#mnpa_third_issue').val("")
      if($(this).val()==="14"){
        $('.question4').find('#mnpa_third_issue').show()
      }
    });
    $('#q4_npa_third_issue').on("change",function(){
      $('.question4').find('#npa_third_issue').hide()
      $('.question4').find('#npa_third_issue').val("")
      if($(this).val()==="14"){
        $('.question4').find('#npa_third_issue').show()
      }
    });
    $('#q4_nrm_third_issue').on("change",function(){
      $('.question4').find('#nrm_third_issue').hide()
      $('.question4').find('#nrm_third_issue').val("")
      if($(this).val()==="14"){
        $('.question4').find('#nrm_third_issue').show()
      }
    });
    $('#q4_mla_third_issue').on("change",function(){
      $('.question4').find('#mla_third_issue').hide()
      $('.question4').find('#mla_third_issue').val("")
      if($(this).val()==="14"){
        $('.question4').find('#mla_third_issue').show()
      }
    });

    $('#q4_tip_report_third_issue').on("change",function(){
      $('.question4').find('#tip_report_third_issue').hide()
      $('.question4').find('#tip_report_third_issue').val("")
      if($(this).val()==="14"){
        $('.question4').find('#tip_report_third_issue').show()
      }
    });
    $('#q4_others_specify_third_issue_one').on("change",function(){
      $('.question4').find('#others_specify_third_issue_one').hide()
      $('.question4').find('#others_specify_third_issue_one').val("")
      if($(this).val()==="14"){
        $('.question4').find('#others_specify_third_issue_one').show()
      }
    });
    $('#q4_others_specify_third_issue_two').on("change",function(){
      $('.question4').find('#others_specify_third_issue_two').hide()
      $('.question4').find('#others_specify_third_issue_two').val("")
      if($(this).val()==="14"){
        $('.question4').find('#others_specify_third_issue_two').show()
      }
    });
    $(document).ready(function(){
        $(".fivestatus").on("click",function(){
            var statusvalue = $("input[name='is_trafficking_overrepresented_q5']:checked").val();
            if(statusvalue == '1'){
              $('.question5').find('#five_question_view').show()
            }else{
              $('.question5').find('#five_question_view').hide()
            }
        });
    });

    $(document).ready(function(){
        $(".sixstatus").on("click",function(){
            var statusvalue = $("input[name='is_prevention_efforts_q6']:checked").val();
            if(statusvalue == '1'){
              $('.question6').find('#six_question_view').show()
            }else{
              $('.question6').find('#six_question_view').hide()
            }
        });
    });

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

    $(document).ready(function(){
        $(".tenfifty_status").on("click",function(){
            var statusvalue = $("input[name='is_governments_on_trafficking_q10']:checked").val();
            if(statusvalue == '1'){
              $('.question10').find('#ten_question_view').show()
            }else{
              $('.question10').find('#ten_question_view').hide()
            }
        });
    });

    $(document).ready(function(){
        $(".eleven_status").on("click",function(){
            var statusvalue = $("input[name='is_labor_recruitment_q11']:checked").val();
            $('.question11').find('.othersText').hide()
            $('.question11').find('#q11others').val("")
            if(statusvalue == '1'){
              $('.question11').find('#eleven_question_view').show()
              $('.question11').find('span').addClass('othersText')
            
            }else if(statusvalue=="2"){
              $('.question11').find('#eleven_question_view').hide()
              $('.question11').find('span').removeClass('othersText')
              $('.question11').find('span').show()
            }else{
              $('.question11').find('#eleven_question_view').hide()
              $('.question11').find('span').addClass('othersText')
            }
        });
    });

    $(document).ready(function(){
        $(".twelve_status").on("click",function(){
            var statusvalue = $("input[name='is_recruitment_measures_q12']:checked").val();
            $('.question12').find('.othersText').hide()
            $('.question12').find('#q12others').val("")
            if(statusvalue == '1'){
              $('.question12').find('#twevel_question_view').show()
              $('.question12').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question12').find('#twevel_question_view').hide()
              $('.question12').find('span').removeClass('othersText')
              $('.question12').find('span').show()
            }else{
              $('.question12').find('#twevel_question_view').hide()
              $('.question12').find('span').addClass('othersText')
            }
        });
    });

       $(document).ready(function(){
        $(".fourteen_status").on("click",function(){
            var statusvalue = $("input[name='is_facilitate_trafficking_q14']:checked").val();
            $('.question14').find('.othersText').hide()
            $('.question14').find('#q14others').val("")
            if(statusvalue == '1'){
              $('.question14').find('#fourteen_question_view').show()
              $('.question14').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question14').find('#fourteen_question_view').hide()
              $('.question14').find('span').removeClass('othersText')
              $('.question14').find('span').show()
            }else{
              $('.question14').find('#fourteen_question_view').hide()
              $('.question14').find('span').addClass('othersText')

            }
          });
       });

       $(document).ready(function(){
        $(".fifteen_status").on("click",function(){
          var statusvalue = $("input[name='is_public_procurement_q15']:checked").val();
            $('.question15').find('.othersText').hide()
            $('.question15').find('#q15others').val("")
            if(statusvalue == '1'){
              $('.question15').find('#fifteen_question_view').show()
              $('.question15').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question15').find('#fifteen_question_view').hide()
              $('.question15').find('span').removeClass('othersText')
              $('.question15').find('span').show()
            }else{
              $('.question15').find('#fifteen_question_view').hide()
              $('.question15').find('span').addClass('othersText')
            }
        });
    });

    $(document).ready(function(){
        $(".seventeen_status").on("click",function(){
            var statusvalue = $("input[name='is_child_sex_tourism_q17']:checked").val();
            $('.question17').find('.othersText').hide()
            $('.question17').find('#q17others').val("")
            if(statusvalue == '1'){
              $('.question17').find('#seventeen_question_view').show()
              $('.question17').find('span').addClass('othersText')
            }else if(statusvalue == '2'){
              $('.question17').find('#seventeen_question_view').hide()
              $('.question17').find('span').removeClass('othersText')
              $('.question17').find('span').show()
            }else{
              $('.question17').find('#seventeen_question_view').hide()
              $('.question17').find('span').addClass('othersText')

            }
        });
    });


    $(document).ready(function(){
        $(".eighteen_status").on("click",function(){
            var statusvalue = $("input[name='is_engage_trafficking_q18']:checked").val();
            $('.question18').find('.othersText').hide()         
            $('.question18').find('#q18others').val("")   
            if(statusvalue == '1'){
              $('.question18').find('#eightteen_question_view').show()
              $('.question18').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question18').find('#eightteen_question_view').hide()
              $('.question18').find('span').removeClass('othersText')
              $('.question18').find('span').show()
            }else{
              $('.question18').find('#eightteen_question_view').hide()
              $('.question18').find('span').addClass('othersText')

            }
        });
    });

    $(document).ready(function(){
        $(".nineteen_status").on("click",function(){
          var statusvalue = $("input[name='is_criminal_accountability_q19']:checked").val();
          // alert(statusvalue)
            $('.question19').find('.othersText').hide()
            $('.question19').find('#q19others').val("")
            if(statusvalue == '1'){
              $('.question19').find('#nineteen_question_view').show()
              $('.question19').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question19').find('#nineteen_question_view').hide()
              $('.question19').find('span').removeClass('othersText')
              $('.question19').find('span').show()
            }else{
              $('.question19').find('#nineteen_question_view').hide()
              $('.question19').find('span').addClass('othersText')
            }
        });
    });

    $(document).ready(function(){
        $(".twenty_one_status").on("click",function(){
            var statusvalue = $("input[name='is_standard_procedures_victim_q21']:checked").val();
            $('.question21').find('.othersText').hide()
            $('.question21').find('#q21others').val("")
            if(statusvalue == '1'){
              $('.question21').find('#21_question_view').show()
              $('.question21').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question21').find('#21_question_view').hide()
              $('.question21').find('span').removeClass('othersText')
              $('.question21').find('span').show()
            }else{
              $('.question21').find('#21_question_view').hide()
              $('.question21').find('span').addClass('othersText')
            }
        });
    });

    $(document).ready(function(){
        $(".status").on("click",function(){
            var statusvalue = $("input[name='is_proactive_victim_identification_q22']:checked").val();
            $('.question22').find('#22_question_view').hide()
            $('.question22').find('#q22others').val("")
            $('.question22').find('.othersText').hide()
            if(statusvalue == '1'){
              $('.question22').find('#22_question_view').show()
              $('.question22').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question22').find('#22_question_view').hide()
              $('.question22').find('span').removeClass('othersText')
              $('.question22').find('span').show()
            }else{
              $('.question22').find('#22_question_view').hide()
              $('.question22').find('span').addClass('othersText')

            }
        });
    });

    $(document).ready(function(){
        $(".twenty_three_status").on("click",function(){
            var statusvalue = $("input[name='is_detaining_arresting_individuals_q23']:checked").val();
            $('.question23').find('#23_question_view').hide()
            $('.question23').find('#q23others').val("")
            if(statusvalue == '1'){
              $('.question23').find('#23_question_view').show()
              $('.question23').find('span').addClass('othersText')

            }else if(statusvalue=="2"){
              $('.question23').find('#23_question_view').hide()
              $('.question23').find('span').removeClass('othersText')
              $('.question23').find('span').show()
            }else{
              $('.question23').find('#23_question_view').hide()
              $('.question23').find('span').addClass('othersText')
            }
        });
    });

    

    $(document).ready(function(){
        $(".forty_five_status").on("click",function(){
            var statusvalue = $("input[name='is_border_security_measures_q45']:checked").val();
            $('.question45').find('.othersText').hide()
            $('.question45').find('#q45others').val("")
            if(statusvalue == '1'){
              $('.question45').find('#45_question_view').show()
              $('.question45').find('span').addClass('othersText')

            }else if(statusvalue=="2"){
              $('.question45').find('#45_question_view').hide()
              $('.question45').find('span').removeClass('othersText')
              $('.question45').find('span').show()
            }else{
              $('.question45').find('#45_question_view').hide()
              $('.question45').find('span').addClass('othersText')

            }
        });
    });

    $(document).ready(function(){
        $(".fity_one").on("click",function(){
            var statusvalue = $("input[name='is_spend_prosecution_efforts_q50']:checked").val();
            $('.question50').find('.othersText').hide()
            $('.question50').find('#q50others').val("")
            
            if(statusvalue == '1'){
              $('.question50').find('#50_question_view').show()
              $('.question50').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question50').find('#50_question_view').hide()
              $('.question50').find('span').removeClass('othersText')
              $('.question50').find('span').show()
            }else{
              $('.question50').find('#50_question_view').hide()
              $('.question50').find('span').addClass('othersText')

            }
        });
    });


    $(document).ready(function(){
        $(".fifty_two_status").on("click",function(){
            var statusvalue = $("input[name='is_allocate_victim_compensation_q52']:checked").val();
            $('.question52').find('.othersText').hide();
            $('.question52').find('#q52others').val('')

            if(statusvalue == '1'){
              $('.question52').find('#52_question_view').show()
              $('.question52').find('span').addClass('othersText')

            }else if(statusvalue=="2"){
              $('.question52').find('#52_question_view').hide()
              $('.question52').find('span').removeClass('othersText')
              $('.question52').find('span').show()
            }else{
              $('.question52').find('#52_question_view').hide()
              $('.question52').find('span').addClass('othersText')

            }
        });
    });
    $(document).ready(function(){
        $(".nine_status").on("click",function(){
            var statusvalue = $("input[name='is_awareness_activities_q9']:checked").val();
               $('.question9').find('.othersText').hide()
               $('.question9').find('#q9others').val("")
            if(statusvalue == '1'){
              $('.question9').find('#9_question_view').show()
              $('.question9').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question9').find('#9_question_view').hide()
              $('.question9').find('span').removeClass('othersText')
              $('.question9').find('span').show()
            }else{
              $('.question9').find('#9_question_view').hide()
              $('.question9').find('span').addClass('othersText')
            }
        });
    });

    // $(document).ready(function(){
    //     $(".thirten_status").on("click",function(){
    //         var statusvalue = $("input[name='thirten_status']:checked").val();
    //         $('.question30').find('.othersText').hide()
    //         if(statusvalue == 'yes'){
    //           $('.question30').find('#30_question_view').show()
    //         }else if(statusvalue=="Others"){
    //           $('.question30').find('.othersText').show()
    //         }else{
    //           $('.question30').find('#30_question_view').hide()
    //         }
    //     });
    // });

   
    // $(document).ready(function(){
    //     $(".thirty34_fifty_status").on("click",function(){
    //         var statusvalue = $("input[name='thirty34_fifty_status']:checked").val();
    //         if(statusvalue == 'yes'){
    //           $('.question34').find('#34_question_view').show()
    //         }else{
    //           $('.question34').find('#34_question_view').hide()
    //         }
    //     });
    // });
    $(document).ready(function(){
        $(".thirty_five_status").on("click",function(){
            var statusvalue = $("input[name='is_changes_preexisting_q35']:checked").val();
            $('.question35').find('.othersText').hide();
            $('.question35').find('#q35others').val('')
            if(statusvalue == '1'){
              $('.question35').find('#35_question_view').show()
              $('.question35').find('span').addClass('othersText')

            }else if(statusvalue=="2"){
              $('.question35').find('#35_question_view').hide()
              $('.question35').find('span').removeClass('othersText')
              $('.question35').find('span').show()
            }else{
              $('.question35').find('#35_question_view').hide()
              $('.question35').find('span').addClass('othersText')

            }
        });
    });

    

  


    $(document).ready(function(){
        $(".thirty_eight_status").on("click",function(){
            var statusvalue = $("input[name='is_law_enforcement_activities_q38']:checked").val();
            $('.question38').find('.othersText').hide();
            $('.question38').find('#q38others').val("")
            if(statusvalue == '1'){
              $('.question38').find('#38_question_view').show()
              $('.question38').find('span').addClass('othersText')

            }else if(statusvalue=="2"){
              $('.question38').find('#38_question_view').hide()
              $('.question38').find('span').removeClass('othersText')
              $('.question38').find('span').show()
            }else{
              $('.question38').find('#38_question_view').hide()
              $('.question38').find('span').addClass('othersText')

            }
        });
    });


    $(document).ready(function(){
        $(".fifty_three_status").on("click",function(){
            var statusvalue = $("input[name='is_vots_received_assistance_q53']:checked").val();
            $('.question53').find('.othersText').hide();
            $('.question53').find('#q53others').val('')

            if(statusvalue == '1'){
              $('.question53').find('#53_question_view').show()
              $('.question53').find('span').addClass('othersText')

            }else if(statusvalue=="2"){
              $('.question53').find('#53_question_view').hide()
              $('.question53').find('span').removeClass('othersText')
              $('.question53').find('span').show()
            }else{
              $('.question53').find('#53_question_view').hide()
              $('.question53').find('span').addClass('othersText')

            }
        });
    });

   

    // $(document).ready(function(){
    //     $(".twenty_six_status").on("click",function(){
          
    //         var statusvalue = $("input[name='twenty_six_status']:checked").val();
    //         if(statusvalue == 'yes'){
    //           $('.question26').find('#26_question_view').show()
    //         }else{
    //           $('.question26').find('#26_question_view').hide()
    //         }
    //     });
    // });

    
  
    
    $(document).ready(function(){
        $(".forty_seven_status").on("click",function(){
            var statusvalue = $("input[name='is_courts_adequate_resources_q47']:checked").val();
            $('.question47').find('.othersText').hide();
            $('.question47').find('#q47others').val('')
            if(statusvalue == '1'){
              $('.question47').find('#47_question_view').show()
              $('.question47').find('span').addClass('othersText')
            }else if(statusvalue=="2"){
              $('.question47').find('#47_question_view').hide()
              $('.question47').find('span').removeClass('othersText')
              $('.question47').find('span').show()
            }else{
              $('.question47').find('#47_question_view').hide()
              $('.question47').find('span').addClass('othersText')
            }
        });
    });



    $(document).ready(function(){
        $(".sex_trafficking_force_labor_status").on("click",function(){
            var statusvalue = $("input[name='is_sex_trafficking_location_q2']:checked").val();
            if(statusvalue == '1'){
              $('.question2').find('#2_question_view').show()
            }else{
              $('.question2').find('#2_question_view').hide()
            }
        });
    });


    


    

    
    
    

//19 question calculation
    $(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    
    $(document).on('input', '.question19ColMen', function() {
      updateTotal('.question19ColMen', '#menRowSum');
      updateTotal('.gTotal', '#gTotal');
    });

    $(document).on('input', '.question19Col1', function() {
      updateTotal('.question19Col1', '#question19Col1');
      updateTotal('.gTotal', '#gTotal');
    });

    $(document).on('input', '.question19Col2', function() {
      updateTotal('.question19Col2', '#question19Col2');
      updateTotal('.gTotal', '#gTotal');
    });

    $(document).on('input', '.question19Col3', function() {
      updateTotal('.question19Col3', '#question19Col3');
      updateTotal('.gTotal', '#gTotal');
    });
    $(document).on('input', '.question19Col4', function() {
      updateTotal('.question19Col4', '#question19Col4');
      updateTotal('.gTotal', '#gTotal');
    });
    $(document).on('input', '.question19Col5', function() {
      updateTotal('.question19Col5', '#question19Col5');
      updateTotal('.gTotal', '#gTotal');
    });

    

    $(document).on('input', '.question19rowmen', function() {
      updateTotal('.question19rowmen', '#question19rowMenTotal');
      updateTotal('.gTotal', '#gTotal');

    });

    $(document).on('input', '.question19rowWomen', function() {
      updateTotal('.question19rowWomen', '#question19rowWomenTotal');
      updateTotal('.gTotal', '#gTotal');
    });
    

    $(document).on('input', '.question19row3rdG', function() {
      updateTotal('.question19row3rdG', '#question19row3rdGTotal');
      updateTotal('.gTotal', '#gTotal');

    });    
    
  })
  //19 question calculation end

  
//44 question calculation
$(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    

    $(document).on('input', '.question44Col1', function() {
      updateTotal('.question44Col1', '#question44Col1');
      updateTotal('.q44gTotal', '#q44gTotal');
    });

    $(document).on('input', '.question44Col2', function() {
      updateTotal('.question44Col2', '#question44Col2');
      updateTotal('.q44gTotal', '#q44gTotal');
    });
    $(document).on('input', '.question44Col3', function() {
      updateTotal('.question44Col3', '#question44Col3');
      updateTotal('.q44gTotal', '#q44gTotal');
    });
    $(document).on('input', '.question44Col4', function() {
      updateTotal('.question44Col4', '#question44Col4');
      updateTotal('.q44gTotal', '#q20gTotal');
    });
    $(document).on('input', '.question44Col5', function() {
      updateTotal('.question44Col5', '#question44Col5');
      updateTotal('.q44gTotal', '#q44gTotal');
    });
    $(document).on('input', '.question44Col6', function() {
      updateTotal('.question44Col6', '#question44Col6');
      updateTotal('.q44gTotal', '#q44gTotal');
    });
    $(document).on('input', '.question44Col7', function() {
      updateTotal('.question44Col7', '#question44Col7');
      updateTotal('.q44gTotal', '#q44gTotal');
    });

    $(document).on('input', '.question44Col8', function() {
      updateTotal('.question44Col8', '#question44Col8');
      updateTotal('.q44gTotal', '#q44gTotal');
    });


    $(document).on('input', '.question44Col9', function() {
      updateTotal('.question44Col9', '#question44Col9');
      updateTotal('.q44gTotal', '#q44gTotal');
    });
    $(document).on('input', '.question44Co20', function() {
      updateTotal('.question44Co20', '#question44Co20');
      updateTotal('.q44gTotal', '#q44gTotal');
    });
  
   


    $(document).on('input', '.question44RowMen', function() {
      updateTotal('.question44RowMen', '#q44MenTotal');
      updateTotal('.q44gTotal', '#q44gTotal');

    });

    $(document).on('input', '.question44RowWomen', function() {
      updateTotal('.question44RowWomen', '#q44WomenTotal');
      updateTotal('.q44gTotal', '#q44gTotal');
    });
    

    $(document).on('input', '.question44Row3rdGender', function() {
      updateTotal('.question44Row3rdGender', '#q44TrdGTotal');
      updateTotal('.q44gTotal', '#q44gTotal');

    });    
  })

  //44 question calculation end

  //34 question start

  $(document).ready(function() {

 // A function to update the total for a specific group of inputs
 function updateTotal(inputsClass, totalId) {
 let sum = 0;
 $(inputsClass).each(function() {
 sum += parseFloat($(this).val()) || 0;
 });
 $(totalId).val(sum);
 }
 
 $(document).on('input', '.question34Col1', function() {
 updateTotal('.question34Col1', '#question34Col1');
 // updateTotal('.gTotal', '#gTotal');
 });

 $(document).on('input', '.question34Col2', function() {
 updateTotal('.question34Col2', '#question34Col2');
 // updateTotal('.gTotal', '#gTotal');
 });

 $(document).on('input', '.question34Col3', function() {
 updateTotal('.question34Col3', '#question34Col3');
 // updateTotal('.gTotal', '#gTotal');
 });

 $(document).on('input', '.question34Col4', function() {
 updateTotal('.question34Col4', '#question34Col4');
 //updateTotal('.gTotal', '#gTotal');
 });
 $(document).on('input', '.question34Col5', function() {
 updateTotal('.question34Col5', '#question34Col5');
 //updateTotal('.gTotal', '#gTotal');
 });
 $(document).on('input', '.question34Col6', function() {
 updateTotal('.question34Col6', '#question34Col6');
 // updateTotal('.gTotal', '#gTotal');
 });

 $(document).on('input', '.question34Col7', function() {
 updateTotal('.question34Col7', '#question34Col7');
 // updateTotal('.gTotal', '#gTotal');
 });

})

//question 24
$(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    

    $(document).on('input', '.question24Col1', function() {
      updateTotal('.question24Col1', '#question24Col1');
      updateTotal('.q24gTotal', '#q24gTotal');
    });

    $(document).on('input', '.question24Col2', function() {
      updateTotal('.question24Col2', '#question24Col2');
      updateTotal('.q24gTotal', '#q24gTotal');
    });
    $(document).on('input', '.question24Col3', function() {
      updateTotal('.question24Col3', '#question24Col3');
      updateTotal('.q24gTotal', '#q24gTotal');
    });
    $(document).on('input', '.question24Col4', function() {
      updateTotal('.question24Col4', '#question24Col4');
      updateTotal('.q24gTotal', '#q24gTotal');
    });
    $(document).on('input', '.question24Col5', function() {
      updateTotal('.question24Col5', '#question24Col5');
      updateTotal('.q24gTotal', '#q24gTotal');
    });
    $(document).on('input', '.question24Col6', function() {
      updateTotal('.question24Col6', '#question24Col6');
      updateTotal('.q24gTotal', '#q24gTotal');
    });
    $(document).on('input', '.question24Col7', function() {
      updateTotal('.question24Col7', '#question24Col7');
      updateTotal('.q24gTotal', '#q24gTotal');
    });


    $(document).on('input', '.question24RowMen', function() {
      updateTotal('.question24RowMen', '#q24MenTotal');
      updateTotal('.q24gTotal', '#q24gTotal');

    });

    $(document).on('input', '.question24RowWomen', function() {
      updateTotal('.question24RowWomen', '#q24WomenTotal');
      updateTotal('.q24gTotal', '#q424gTotal');
    });
    

    $(document).on('input', '.question24Row3rdGender', function() {
      updateTotal('.question24Row3rdGender', '#q24TrdGTotal');
      updateTotal('.q24gTotal', '#q24gTotal');

    });    

    $(document).on('input', '.question24RowBoys', function() {
      updateTotal('.question24RowBoys', '#q24BoysTotal');
      updateTotal('.q24gTotal', '#q24gTotal');
    });
    

    $(document).on('input', '.question24RowGirls', function() {
      updateTotal('.question24RowGirls', '#q24GirlsTotal');
      updateTotal('.q24gTotal', '#q24gTotal');

    });    
    
  })
  //question 24 end


  //question 25
$(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    

    $(document).on('input', '.question25Col1', function() {
      updateTotal('.question25Col1', '#question25Col1');
      updateTotal('.q25gTotal', '#q25gTotal');
    });

    $(document).on('input', '.question25Col2', function() {
      updateTotal('.question25Col2', '#question25Col2');
      updateTotal('.q25gTotal', '#q25gTotal');
    });
    $(document).on('input', '.question25Col3', function() {
      updateTotal('.question25Col3', '#question25Col3');
      updateTotal('.q25gTotal', '#q25gTotal');
    });
    $(document).on('input', '.question25Col4', function() {
      updateTotal('.question25Col4', '#question25Col4');
      updateTotal('.q25gTotal', '#q25gTotal');
    });
    $(document).on('input', '.question25Col5', function() {
      updateTotal('.question25Col5', '#question25Col5');
      updateTotal('.q25gTotal', '#q25gTotal');
    });
    $(document).on('input', '.question25Col6', function() {
      updateTotal('.question25Col6', '#question25Col6');
      updateTotal('.q25gTotal', '#q25gTotal');
    });
    $(document).on('input', '.question25Col7', function() {
      updateTotal('.question25Col7', '#question25Col7');
      updateTotal('.q25gTotal', '#q25gTotal');
    });
    $(document).on('input', '.question25Col8', function() {
      updateTotal('.question25Col8', '#question25Col8');
      updateTotal('.q25gTotal', '#q25gTotal');
    });
    $(document).on('input', '.question25Col9', function() {
      updateTotal('.question25Col9', '#question25Col9');
      updateTotal('.q25gTotal', '#q25gTotal');
    });
    $(document).on('input', '.question25Co20', function() {
      updateTotal('.question25Co20', '#question25Co20');
      updateTotal('.q25gTotal', '#q25gTotal');
    });
    $(document).on('input', '.question25Co21', function() {
      updateTotal('.question25Co21', '#question25Co21');
      updateTotal('.q25gTotal', '#q25gTotal');
    });
    $(document).on('input', '.question25Co22', function() {
      updateTotal('.question25Co22', '#question25Co22');
      updateTotal('.q25gTotal', '#q25gTotal');
    });
    $(document).on('input', '.question25Co23', function() {
      updateTotal('.question25Co23', '#question25Co23');
      updateTotal('.q25gTotal', '#q25gTotal');
    });
    $(document).on('input', '.question25Co24', function() {
      updateTotal('.question25Co24', '#question25Co24');
      updateTotal('.q25gTotal', '#q25gTotal');
    });
    $(document).on('input', '.question25Co25', function() {
      updateTotal('.question25Co25', '#question25Co25');
      updateTotal('.q25gTotal', '#q25gTotal');
    });
    $(document).on('input', '.question25Co26', function() {
      updateTotal('.question25Co26', '#question25Co26');
      updateTotal('.q25gTotal', '#q25gTotal');
    });
    $(document).on('input', '.question25Co27', function() {
      updateTotal('.question25Co27', '#question25Co27');
      updateTotal('.q25gTotal', '#q25gTotal');
    });
    $(document).on('input', '.question25Co28', function() {
      updateTotal('.question25Co28', '#question25Co28');
      updateTotal('.q25gTotal', '#q25gTotal');
    });
    $(document).on('input', '.question25Co29', function() {
      updateTotal('.question25Co29', '#question25Co29');
      updateTotal('.q25gTotal', '#q25gTotal');
    });
    $(document).on('input', '.question25Co30', function() {
      updateTotal('.question25Co30', '#question25Co30');
      updateTotal('.q25gTotal', '#q25gTotal');
    });
    $(document).on('input', '.question25Co31', function() {
      updateTotal('.question25Co31', '#question25Co31');
      updateTotal('.q25gTotal', '#q25gTotal');
    });
    $(document).on('input', '.question25Co32', function() {
      updateTotal('.question25Co32', '#question25Co32');
      updateTotal('.q25gTotal', '#q25gTotal');
    });


    $(document).on('input', '.question25RowMen', function() {
      updateTotal('.question25RowMen', '#q25MenTotal');
      updateTotal('.q25gTotal', '#q25gTotal');

    });

    $(document).on('input', '.question25RowWomen', function() {
      updateTotal('.question25RowWomen', '#q25WomenTotal');
      updateTotal('.q25gTotal', '#q25gTotal');
    });
    

    $(document).on('input', '.question25Row3rdGender', function() {
      updateTotal('.question25Row3rdGender', '#q25TrdGTotal');
      updateTotal('.q25gTotal', '#q25gTotal');

    });    

    $(document).on('input', '.question25RowBoys', function() {
      updateTotal('.question25RowBoys', '#q25BoysTotal');
      updateTotal('.q25gTotal', '#q25gTotal');
    });
    

    $(document).on('input', '.question25RowGirls', function() {
      updateTotal('.question25RowGirls', '#q25GirlsTotal');
      updateTotal('.q25gTotal', '#q25gTotal');

    });    
    
  })
  //question 25 end

  // question 27 
  $(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    

    $(document).on('input', '.question27Col1', function() {
      updateTotal('.question27Col1', '#question27Col1');
      updateTotal('.q27gTotal', '#q27gTotal');
    });

    $(document).on('input', '.question27Col2', function() {
      updateTotal('.question27Col2', '#question27Col2');
      updateTotal('.q27gTotal', '#q27gTotal');
    });
    $(document).on('input', '.question27Col3', function() {
      updateTotal('.question27Col3', '#question27Col3');
      updateTotal('.q27gTotal', '#q27gTotal');
    });
    $(document).on('input', '.question27Col4', function() {
      updateTotal('.question27Col4', '#question27Col4');
      updateTotal('.q27gTotal', '#q27gTotal');
    });
    $(document).on('input', '.question27Col5', function() {
      updateTotal('.question27Col5', '#question27Col5');
      updateTotal('.q27gTotal', '#q27gTotal');
    });
    $(document).on('input', '.question27Col6', function() {
      updateTotal('.question27Col6', '#question27Col6');
      updateTotal('.q27gTotal', '#q27gTotal');
    });
    $(document).on('input', '.question27Col7', function() {
      updateTotal('.question27Col7', '#question27Col7');
      updateTotal('.q27gTotal', '#q27gTotal');
    });
    $(document).on('input', '.question27Col8', function() {
      updateTotal('.question27Col8', '#question27Col8');
      updateTotal('.q27gTotal', '#q27gTotal');
    });
    $(document).on('input', '.question27Col9', function() {
      updateTotal('.question27Col9', '#question27Col9');
      updateTotal('.q27gTotal', '#q27gTotal');
    });
    $(document).on('input', '.question27Co20', function() {
      updateTotal('.question27Co20', '#question27Co20');
      updateTotal('.q27gTotal', '#q27gTotal');
    });
    $(document).on('input', '.question27Co21', function() {
      updateTotal('.question27Co21', '#question27Co21');
      updateTotal('.q27gTotal', '#q27gTotal');
    });
    $(document).on('input', '.question27Co22', function() {
      updateTotal('.question27Co22', '#question27Co22');
      updateTotal('.q27gTotal', '#q27gTotal');
    });
    $(document).on('input', '.question27Co23', function() {
      updateTotal('.question27Co23', '#question27Co23');
      updateTotal('.q27gTotal', '#q27gTotal');
    });
    $(document).on('input', '.question27Co24', function() {
      updateTotal('.question27Co24', '#question27Co24');
      updateTotal('.q27gTotal', '#q27gTotal');
    });
    $(document).on('input', '.question27Co25', function() {
      updateTotal('.question27Co25', '#question27Co25');
      updateTotal('.q27gTotal', '#q27gTotal');
    });

    $(document).on('input', '.question27Co26', function() {
      updateTotal('.question27Co26', '#question27Co26');
      updateTotal('.q27gTotal', '#q27gTotal');
    });

    $(document).on('input', '.question27Co27', function() {
      updateTotal('.question27Co27', '#question27Co27');
      updateTotal('.q27gTotal', '#q27gTotal');
    });
   
   

  


    $(document).on('input', '.question27RowBoys', function() {
      updateTotal('.question27RowBoys', '#q27BoysTotal');
      updateTotal('.q27gTotal', '#q27gTotal');
    });
    

    $(document).on('input', '.question25RowGirls', function() {
      updateTotal('.question27RowGirls', '#q27GirlsTotal');
      updateTotal('.q27gTotal', '#q27gTotal');

    });    
    
  })

  //question 27 end


  //question 30

  $(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    

    $(document).on('input', '.question30Col1', function() {
      updateTotal('.question30Col1', '#question30Col1');
      updateTotal('.q30gTotal', '#q30gTotal');
    });

    $(document).on('input', '.question30Col2', function() {
      updateTotal('.question30Col2', '#question30Col2');
      updateTotal('.q30gTotal', '#q30gTotal');
    });
    $(document).on('input', '.question30Col3', function() {
      updateTotal('.question30Col3', '#question30Col3');
      updateTotal('.q30gTotal', '#q30gTotal');
    });
    $(document).on('input', '.question30Col4', function() {
      updateTotal('.question30Col4', '#question30Col4');
      updateTotal('.q30gTotal', '#q30gTotal');
    });
    $(document).on('input', '.question30Col5', function() {
      updateTotal('.question30Col5', '#question30Col5');
      updateTotal('.q30gTotal', '#q30gTotal');
    });
    $(document).on('input', '.question30Col6', function() {
      updateTotal('.question30Col6', '#question30Col6');
      updateTotal('.q30gTotal', '#q30gTotal');
    });
    $(document).on('input', '.question30Col7', function() {
      updateTotal('.question30Col7', '#question30Col7');
      updateTotal('.q30gTotal', '#q30gTotal');
    });
    $(document).on('input', '.question30Col8', function() {
      updateTotal('.question30Col8', '#question30Col8');
      updateTotal('.q30gTotal', '#q30gTotal');
    });
    $(document).on('input', '.question30Col9', function() {
      updateTotal('.question30Col9', '#question30Col9');
      updateTotal('.q30gTotal', '#q30gTotal');
    });
    $(document).on('input', '.question30Co20', function() {
      updateTotal('.question30Co20', '#question30Co20');
      updateTotal('.q30gTotal', '#q30gTotal');
    });

    $(document).on('input', '.question30Co21', function() {
      updateTotal('.question30Co21', '#question30Co21');
      updateTotal('.q30gTotal', '#q30gTotal');
    });

    $(document).on('input', '.question30Co22', function() {
      updateTotal('.question30Co22', '#question30Co22');
      updateTotal('.q30gTotal', '#q30gTotal');
    });
    $(document).on('input', '.question30Co23', function() {
      updateTotal('.question30Co23', '#question30Co23');
      updateTotal('.q30gTotal', '#q30gTotal');
    });
    $(document).on('input', '.question30Co24', function() {
      updateTotal('.question30Co24', '#question30Co24');
      updateTotal('.q30gTotal', '#q30gTotal');
    });

    $(document).on('input', '.question30Co25', function() {
      updateTotal('.question30Co25', '#question30Co25');
      updateTotal('.q30gTotal', '#q30gTotal');
    });

    $(document).on('input', '.question30Co26', function() {
      updateTotal('.question30Co26', '#question30Co26');
      updateTotal('.q30gTotal', '#q30gTotal');
    });

    $(document).on('input', '.question30Co27', function() {
      updateTotal('.question30Co27', '#question30Co27');
      updateTotal('.q30gTotal', '#q30gTotal');
    });



    $(document).on('input', '.question30RowMen', function() {
      updateTotal('.question30RowMen', '#q30MenTotal');
      updateTotal('.q30gTotal', '#q30gTotal');

    });

    $(document).on('input', '.question30RowWomen', function() {
      updateTotal('.question30RowWomen', '#q30WomenTotal');
      updateTotal('.q30gTotal', '#q30gTotal');
    });
    

    $(document).on('input', '.question30Row3rdGender', function() {
      updateTotal('.question30Row3rdGender', '#q30TrdGTotal');
      updateTotal('.q30gTotal', '#q30gTotal');

    });    

    $(document).on('input', '.question30RowBoys', function() {
      updateTotal('.question30RowBoys', '#q30BoysTotal');
      updateTotal('.q30gTotal', '#q30gTotal');
    });
    

    $(document).on('input', '.question30RowGirls', function() {
      updateTotal('.question30RowGirls', '#q30GirlsTotal');
      updateTotal('.q30gTotal', '#q30gTotal');

    });    
    
  })
  // question 30


  //question 31

  $(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    
// internal tracking
    $(document).on('input', '.question31Col1', function() {
    
      updateTotal('.question31Col1', '#question31Col1'); // row total
      updateTotal('.question31RowMen', '#thirty_one_grand_men');
      updateTotal('.question31RowWomen', '#thirty_one_grand_women');
      updateTotal('.question31Row3rdGender', '#thirty_one_grand_third_gender');
      updateTotal('.question31RowBoys', '#thirty_one_grand_boys');
      updateTotal('.question31RowGirls', '#thirty_one_grand_girls');
      updateTotal('.q31Total', '#thirty_one_grand_total');
      
      updateTotal('.combine_men', '#combine_grand_men');
      updateTotal('.combine_women', '#combine_grand_women');
      updateTotal('.combine_third_gender', '#combine_grand_third_gender');
      updateTotal('.combine_boys', '#combine_grand_boys');
      updateTotal('.combine_girls', '#combine_grand_girls');
      updateTotal('.combineTotal', '#combine_grand_total');//combine total

    });

    $(document).on('input', '.question31Col2', function() {
      updateTotal('.question31Col2', '#question31Col2'); // row total
      updateTotal('.question31RowMen', '#thirty_one_grand_men');
      updateTotal('.question31RowWomen', '#thirty_one_grand_women');
      updateTotal('.question31Row3rdGender', '#thirty_one_grand_third_gender');
      updateTotal('.question31RowBoys', '#thirty_one_grand_boys');
      updateTotal('.question31RowGirls', '#thirty_one_grand_girls');
      updateTotal('.q31Total', '#thirty_one_grand_total');

      updateTotal('.combine_men', '#combine_grand_men');
      updateTotal('.combine_women', '#combine_grand_women');
      updateTotal('.combine_third_gender', '#combine_grand_third_gender');
      updateTotal('.combine_boys', '#combine_grand_boys');
      updateTotal('.combine_girls', '#combine_grand_girls');
      updateTotal('.combineTotal', '#combine_grand_total');//combine total
    });
    $(document).on('input', '.question31Col3', function() {
      updateTotal('.question31Col3', '#question31Col3'); //row total
      updateTotal('.question31RowMen', '#thirty_one_grand_men');
      updateTotal('.question31RowWomen', '#thirty_one_grand_women');
      updateTotal('.question31Row3rdGender', '#thirty_one_grand_third_gender');
      updateTotal('.question31RowBoys', '#thirty_one_grand_boys');
      updateTotal('.question31RowGirls', '#thirty_one_grand_girls');
      updateTotal('.q31Total', '#thirty_one_grand_total');

      updateTotal('.combine_men', '#combine_grand_men');
      updateTotal('.combine_women', '#combine_grand_women');
      updateTotal('.combine_third_gender', '#combine_grand_third_gender');
      updateTotal('.combine_boys', '#combine_grand_boys');
      updateTotal('.combine_girls', '#combine_grand_girls');
      updateTotal('.combineTotal', '#combine_grand_total');//combine total
    });

//international tracking
    $(document).on('input', '.internationalTrack1', function() {
    
    updateTotal('.internationalTrack1', '#internationalTrack1'); // row total
    updateTotal('.internationalRowMen', '#international_grand_men');
    updateTotal('.internationalRowWomen', '#international_grand_women');
    updateTotal('.internationalRow3rdGender', '#international_grand_third_gender');
    updateTotal('.internationalRowBoys', '#international_grand_boys');
    updateTotal('.internationalRowGirls', '#international_grand_girls');
    updateTotal('.q31Total2', '#international_grand_total');

    updateTotal('.combine_men', '#combine_grand_men');
    updateTotal('.combine_women', '#combine_grand_women');
    updateTotal('.combine_third_gender', '#combine_grand_third_gender');
    updateTotal('.combine_boys', '#combine_grand_boys');
    updateTotal('.combine_girls', '#combine_grand_girls');
    updateTotal('.combineTotal', '#combine_grand_total');//combine total
  });

  $(document).on('input', '.internationalTrack2', function() {
    updateTotal('.internationalTrack2', '#internationalTrack2'); // row total
    updateTotal('.internationalRowMen', '#international_grand_men');
    updateTotal('.internationalRowWomen', '#international_grand_women');
    updateTotal('.internationalRow3rdGender', '#international_grand_third_gender');
    updateTotal('.internationalRowBoys', '#international_grand_boys');
    updateTotal('.internationalRowGirls', '#international_grand_girls');
    updateTotal('.q31Total2', '#international_grand_total');

    updateTotal('.combine_men', '#combine_grand_men');
    updateTotal('.combine_women', '#combine_grand_women');
    updateTotal('.combine_third_gender', '#combine_grand_third_gender');
    updateTotal('.combine_boys', '#combine_grand_boys');
    updateTotal('.combine_girls', '#combine_grand_girls');
    updateTotal('.combineTotal', '#combine_grand_total');//combine total
  });
  $(document).on('input', '.internationalTrack3', function() {
    updateTotal('.internationalTrack3', '#internationalTrack3'); //row total
    updateTotal('.internationalRowMen', '#international_grand_men');
    updateTotal('.internationalRowWomen', '#international_grand_women');
    updateTotal('.internationalRow3rdGender', '#international_grand_third_gender');
    updateTotal('.internationalRowBoys', '#international_grand_boys');
    updateTotal('.internationalRowGirls', '#international_grand_girls');
    updateTotal('.q31Total2', '#international_grand_total');

    updateTotal('.combine_men', '#combine_grand_men');
    updateTotal('.combine_women', '#combine_grand_women');
    updateTotal('.combine_third_gender', '#combine_grand_third_gender');
    updateTotal('.combine_boys', '#combine_grand_boys');
    updateTotal('.combine_girls', '#combine_grand_girls');
    updateTotal('.combineTotal', '#combine_grand_total');//combine total
  });
    
  })
  //question 31 end
//Question 32
$(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    

    $(document).on('input', '.question32Col1', function() {
      updateTotal('.question32Col1', '#question32Col1');
      updateTotal('.q32gTotal', '#q32gTotal');
    });

    $(document).on('input', '.question32Col2', function() {
      updateTotal('.question32Col2', '#question32Col2');
      updateTotal('.q32gTotal', '#q32gTotal');
      updateTotal('.allTotal', '#grossTotal');
    });

    $(document).on('input', '.question32RowMen', function() {
      updateTotal('.question32RowMen', '#q32MenTotal');
      updateTotal('.q32gTotal', '#q32gTotal');

    });

    $(document).on('input', '.question32RowWomen', function() {
      updateTotal('.question32RowWomen', '#q32WomenTotal');
      updateTotal('.q32gTotal', '#q32gTotal');
    });
    

    $(document).on('input', '.question32Row3rdGender', function() {
      updateTotal('.question32Row3rdGender', '#q32TrdGTotal');
      updateTotal('.q32gTotal', '#q32gTotal');

    });    

    $(document).on('input', '.question32RowBoys', function() {
      updateTotal('.question32RowBoys', '#q32BoysTotal');
      updateTotal('.q32gTotal', '#q32gTotal');
    });
    

    $(document).on('input', '.question32RowGirls', function() {
      updateTotal('.question32RowGirls', '#q32GirlsTotal');
      updateTotal('.q32gTotal', '#q32gTotal');

    });    
    
  })
  // end question 32


//Question 33

$(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    

    $(document).on('input', '.question33Col1', function() {
      updateTotal('.question33Col1', '#question33Col1');
      updateTotal('.q33gTotal', '#q33gTotal');
    });

    $(document).on('input', '.question33Col2', function() {
      updateTotal('.question33Col2', '#question33Col2');
      updateTotal('.q33gTotal', '#q33gTotal');
    });

    $(document).on('input', '.question33RowMen', function() {
      updateTotal('.question33RowMen', '#q33MenTotal');
      updateTotal('.q33gTotal', '#q33gTotal');

    });

    $(document).on('input', '.question33RowWomen', function() {
      updateTotal('.question33RowWomen', '#q33WomenTotal');
      updateTotal('.q33gTotal', '#q33gTotal');
    });
    

    $(document).on('input', '.question33Row3rdGender', function() {
      updateTotal('.question33Row3rdGender', '#q33TrdGTotal');
      updateTotal('.q33gTotal', '#q33gTotal');

    });    

    $(document).on('input', '.question33RowBoys', function() {
      updateTotal('.question33RowBoys', '#q33BoysTotal');
      updateTotal('.q33gTotal', '#q33gTotal');
    });
    

    $(document).on('input', '.question33RowGirls', function() {
      updateTotal('.question33RowGirls', '#q33GirlsTotal');
      updateTotal('.q33gTotal', '#q33gTotal');

    });    
    

    
    
  })

  //34 final


$(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    

    $(document).on('input', '.question34Col1', function() {
      updateTotal('.question34Col1', '#question34Col1');
      updateTotal('.q34gTotal', '#q34gTotal');
    });

    $(document).on('input', '.question34Col2', function() {
      updateTotal('.question34Col2', '#question34Col2');
      updateTotal('.q34gTotal', '#q34gTotal');
    });
    $(document).on('input', '.question34Col3', function() {
      updateTotal('.question34Col3', '#question34Col3');
      updateTotal('.q34gTotal', '#q34gTotal');
    });
    $(document).on('input', '.question34Col4', function() {
      updateTotal('.question34Col4', '#question34Col4');
      updateTotal('.q34gTotal', '#q34gTotal');
    });
    $(document).on('input', '.question34Col5', function() {
      updateTotal('.question34Col5', '#question34Col5');
      updateTotal('.q34gTotal', '#q34gTotal');
    });
    $(document).on('input', '.question34Col6', function() {
      updateTotal('.question34Col6', '#question34Col6');
      updateTotal('.q34gTotal', '#q34gTotal');
    });
    $(document).on('input', '.question34Col7', function() {
      updateTotal('.question34Col7', '#question34Col7');
      updateTotal('.q34gTotal', '#q34gTotal');
    });


    $(document).on('input', '.question34RowMen', function() {
      updateTotal('.question34RowMen', '#q34MenTotal');
      updateTotal('.q34gTotal', '#q34gTotal');

    });

    $(document).on('input', '.question34RowWomen', function() {
      updateTotal('.question34RowWomen', '#q34WomenTotal');
      updateTotal('.q34gTotal', '#q34gTotal');
    });
    

    $(document).on('input', '.question34Row3rdGender', function() {
      updateTotal('.question34Row3rdGender', '#q34TrdGTotal');
      updateTotal('.q34gTotal', '#q34gTotal');

    });    

    $(document).on('input', '.question34RowBoys', function() {
      updateTotal('.question34RowBoys', '#q34BoysTotal');
      updateTotal('.q34gTotal', '#q34gTotal');
    });
    

    $(document).on('input', '.question34RowGirls', function() {
      updateTotal('.question34RowGirls', '#q34GirlsTotal');
      updateTotal('.q34gTotal', '#q34gTotal');

    });    
    
  })
  //34 final


  $(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    

    $(document).on('input', '.q38Col1', function() {
      updateTotal('.q38Col1', '#q38Col1');
    });

    $(document).on('input', '.q38Col2', function() {
      updateTotal('.q38Col2', '#q38Col2');
    });

    $(document).on('input', '.q38Col3', function() {
      updateTotal('.q38Col3', '#q38Col3');
    });

  });

 

  //34 question end


    // Question  51

    $(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    
    $(document).on('input', '.q51NumberCase', function() {
      updateTotal('.q51NumberCase', '#q51NumberCaseTotal');
      
    });
    $(document).on('input', '.q51ColAmount', function() {
      updateTotal('.q51ColAmount', '#q51ColAmountTotal');
    });

  });

//Question 32

//24 question 

//19 question calculation


//36 question
$(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    

    $(document).on('input', '.question36Col1', function() {
      updateTotal('.question36Col1', '#question36Col1');
      updateTotal('.q36gTotal', '#q36gTotal');
    });

    $(document).on('input', '.question36Col2', function() {
      updateTotal('.question36Col2', '#question36Col2');
      updateTotal('.q36gTotal', '#q36gTotal');
    });
    $(document).on('input', '.question36Col3', function() {
      updateTotal('.question36Col3', '#question36Col3');
      updateTotal('.q36gTotal', '#q36gTotal');
    });
    $(document).on('input', '.question36Col4', function() {
      updateTotal('.question36Col4', '#question36Col4');
      updateTotal('.q36gTotal', '#q36gTotal');
    });
    $(document).on('input', '.question36Col5', function() {
      updateTotal('.question36Col5', '#question36Col5');
      updateTotal('.q36gTotal', '#q36gTotal');
    });
    $(document).on('input', '.question36Col6', function() {
      updateTotal('.question36Col6', '#question36Col6');
      updateTotal('.q36gTotal', '#q36gTotal');
    });
    $(document).on('input', '.question36Col7', function() {
      updateTotal('.question36Col7', '#question36Col7');
      updateTotal('.q36gTotal', '#q36gTotal');
    });
    $(document).on('input', '.question36Col8', function() {
      updateTotal('.question36Col8', '#question36Col8');
      updateTotal('.q36gTotal', '#q36gTotal');
    });
    $(document).on('input', '.question36Col9', function() {
      updateTotal('.question36Col9', '#question36Col9');
      updateTotal('.q36gTotal', '#q36gTotal');
    });
    $(document).on('input', '.question36Co20', function() {
      updateTotal('.question36Co20', '#question36Co20');
      updateTotal('.q36gTotal', '#q36gTotal');
    });

    $(document).on('input', '.question36Co21', function() {
      updateTotal('.question36Co21', '#question36Co21');
      updateTotal('.q36gTotal', '#q36gTotal');
    });

    $(document).on('input', '.question36Co22', function() {
      updateTotal('.question36Co22', '#question36Co22');
      updateTotal('.q36gTotal', '#q36gTotal');
    });
    $(document).on('input', '.question36Co23', function() {
      updateTotal('.question36Co23', '#question36Co23');
      updateTotal('.q36gTotal', '#q36gTotal');
    });
    $(document).on('input', '.question36Co24', function() {
      updateTotal('.question36Co24', '#question36Co24');
      updateTotal('.q36gTotal', '#q36gTotal');
    });

    $(document).on('input', '.question36Co25', function() {
      updateTotal('.question36Co25', '#question36Co25');
      updateTotal('.q36gTotal', '#q36gTotal');
    });

    $(document).on('input', '.question36Co26', function() {
      updateTotal('.question36Co26', '#question36Co26');
      updateTotal('.q36gTotal', '#q36gTotal');
    });

    $(document).on('input', '.question36Co27', function() {
      updateTotal('.question36Co27', '#question36Co27');
      updateTotal('.q36gTotal', '#q36gTotal');
    });
    $(document).on('input', '.question36Co28', function() {
      updateTotal('.question36Co28', '#question36Co28');
      updateTotal('.q36gTotal', '#q36gTotal');
    });
    $(document).on('input', '.question36Co29', function() {
      updateTotal('.question36Co29', '#question36Co29');
      updateTotal('.q36gTotal', '#q36gTotal');
    });
    $(document).on('input', '.question36Co30', function() {
      updateTotal('.question36Co30', '#question36Co30');
      updateTotal('.q36gTotal', '#q36gTotal');
    });
     $(document).on('input', '.question36Co31', function() {
      updateTotal('.question36Co31', '#question36Co31');
      updateTotal('.q36gTotal', '#q36gTotal');
    });

    $(document).on('input', '.question36Co32', function() {
      updateTotal('.question36Co32', '#question36Co32');
      updateTotal('.q36gTotal', '#q36gTotal');
    });
    $(document).on('input', '.question36Co33', function() {
      updateTotal('.question36Co33', '#question36Co33');
      updateTotal('.q36gTotal', '#q36gTotal');
    });

    $(document).on('input', '.question36Co34', function() {
      updateTotal('.question36Co34', '#question36Co34');
      updateTotal('.q36gTotal', '#q36gTotal');
    });
    $(document).on('input', '.question36Co35', function() {
      updateTotal('.question36Co35', '#question36Co35');
      updateTotal('.q36gTotal', '#q36gTotal');
    });
    $(document).on('input', '.question36Co36', function() {
      updateTotal('.question36Co36', '#question36Co36');
      updateTotal('.q36gTotal', '#q36gTotal');
    });
    $(document).on('input', '.question36Co37', function() {
      updateTotal('.question36Co37', '#question36Co37');
      updateTotal('.q36gTotal', '#q36gTotal');
    });
    $(document).on('input', '.question36Co38', function() {
      updateTotal('.question36Co38', '#question36Co38');
      updateTotal('.q36gTotal', '#q36gTotal');
    });
    $(document).on('input', '.question36Co39', function() {
      updateTotal('.question36Co39', '#question36Co39');
      updateTotal('.q36gTotal', '#q36gTotal');
    });
    $(document).on('input', '.question36Co40', function() {
      updateTotal('.question36Co40', '#question36Co40');
      updateTotal('.q36gTotal', '#q36gTotal');
    });



    $(document).on('input', '.question36RowMen', function() {
      updateTotal('.question36RowMen', '#q36MenTotal');
      updateTotal('.q36gTotal', '#q36gTotal');

    });

    $(document).on('input', '.question36RowWomen', function() {
      updateTotal('.question36RowWomen', '#q36WomenTotal');
      updateTotal('.q36gTotal', '#q36gTotal');
    });
    

    $(document).on('input', '.question36Row3rdGender', function() {
      updateTotal('.question36Row3rdGender', '#q36TrdGTotal');
      updateTotal('.q36gTotal', '#q36gTotal');

    });    

    $(document).on('input', '.question36RowBoys', function() {
      updateTotal('.question36RowBoys', '#q36BoysTotal');
      updateTotal('.q36gTotal', '#q36gTotal');
    });
    

    $(document).on('input', '.question36RowGirls', function() {
      updateTotal('.question36RowGirls', '#q36GirlsTotal');
      updateTotal('.q36gTotal', '#q36gTotal');

    });    
    
  })
// 36 question end

//37 question
$(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    

    $(document).on('input', '.question37Col1', function() {
      updateTotal('.question37Col1', '#question37Col1');
      updateTotal('.q37gTotal', '#q37gTotal');
    });

    $(document).on('input', '.question37Col2', function() {
      updateTotal('.question37Col2', '#question37Col2');
      updateTotal('.q37gTotal', '#q37gTotal');
    });
    $(document).on('input', '.question37Col3', function() {
      updateTotal('.question37Col3', '#question37Col3');
      updateTotal('.q37gTotal', '#q37gTotal');
    });
    $(document).on('input', '.question37Col4', function() {
      updateTotal('.question37Col4', '#question37Col4');
      updateTotal('.q37gTotal', '#q37gTotal');
    });
    $(document).on('input', '.question37Col5', function() {
      updateTotal('.question37Col5', '#question37Col5');
      updateTotal('.q37gTotal', '#q37gTotal');
    });
    $(document).on('input', '.question37Col6', function() {
      updateTotal('.question37Col6', '#question37Col6');
      updateTotal('.q37gTotal', '#q37gTotal');
    });
    $(document).on('input', '.question37Col7', function() {
      updateTotal('.question37Col7', '#question37Col7');
      updateTotal('.q37gTotal', '#q37gTotal');
    });
    $(document).on('input', '.question37Col8', function() {
      updateTotal('.question37Col8', '#question37Col8');
      updateTotal('.q37gTotal', '#q37gTotal');
    });
    $(document).on('input', '.question37Col9', function() {
      updateTotal('.question37Col9', '#question37Col9');
      updateTotal('.q37gTotal', '#q37gTotal');
    });
    $(document).on('input', '.question37Co20', function() {
      updateTotal('.question37Co20', '#question37Co20');
      updateTotal('.q37gTotal', '#q37gTotal');
    });

    $(document).on('input', '.question37Co21', function() {
      updateTotal('.question37Co21', '#question37Co21');
      updateTotal('.q37gTotal', '#q37gTotal');
    });

    $(document).on('input', '.question37Co22', function() {
      updateTotal('.question37Co22', '#question37Co22');
      updateTotal('.q37gTotal', '#q37gTotal');
    });
    $(document).on('input', '.question37Co23', function() {
      updateTotal('.question37Co23', '#question37Co23');
      updateTotal('.q37gTotal', '#q37gTotal');
    });
    $(document).on('input', '.question37Co24', function() {
      updateTotal('.question37Co24', '#question37Co24');
      updateTotal('.q37gTotal', '#q37gTotal');
    });

    $(document).on('input', '.question37Co25', function() {
      updateTotal('.question37Co25', '#question37Co25');
      updateTotal('.q37gTotal', '#q37gTotal');
    });

    $(document).on('input', '.question37Co26', function() {
      updateTotal('.question37Co26', '#question37Co26');
      updateTotal('.q37gTotal', '#q37gTotal');
    });

    $(document).on('input', '.question37Co27', function() {
      updateTotal('.question37Co27', '#question37Co27');
      updateTotal('.q37gTotal', '#q37gTotal');
    });
    $(document).on('input', '.question37Co28', function() {
      updateTotal('.question37Co28', '#question37Co28');
      updateTotal('.q37gTotal', '#q37gTotal');
    });
    $(document).on('input', '.question37Co29', function() {
      updateTotal('.question37Co29', '#question37Co29');
      updateTotal('.q37gTotal', '#q37gTotal');
    });
    $(document).on('input', '.question37Co30', function() {
      updateTotal('.question37Co30', '#question37Co30');
      updateTotal('.q37gTotal', '#q37gTotal');
    });
     $(document).on('input', '.question37Co31', function() {
      updateTotal('.question37Co31', '#question37Co31');
      updateTotal('.q37gTotal', '#q37gTotal');
    });

    $(document).on('input', '.question37Co32', function() {
      updateTotal('.question37Co32', '#question37Co32');
      updateTotal('.q37gTotal', '#q37gTotal');
    });
    $(document).on('input', '.question37Co33', function() {
      updateTotal('.question37Co33', '#question37Co33');
      updateTotal('.q37gTotal', '#q37gTotal');
    });

    $(document).on('input', '.question37Co34', function() {
      updateTotal('.question37Co34', '#question37Co34');
      updateTotal('.q37gTotal', '#q37gTotal');
    });
    $(document).on('input', '.question37Co35', function() {
      updateTotal('.question37Co35', '#question37Co35');
      updateTotal('.q37gTotal', '#q37gTotal');
    });
    $(document).on('input', '.question37Co36', function() {
      updateTotal('.question37Co36', '#question37Co36');
      updateTotal('.q37gTotal', '#q37gTotal');
    });
    $(document).on('input', '.question37Co37', function() {
      updateTotal('.question37Co37', '#question37Co37');
      updateTotal('.q37gTotal', '#q37gTotal');
    });
    $(document).on('input', '.question37Co38', function() {
      updateTotal('.question37Co38', '#question37Co38');
      updateTotal('.q37gTotal', '#q37gTotal');
    });
    $(document).on('input', '.question37Co39', function() {
      updateTotal('.question37Co39', '#question37Co39');
      updateTotal('.q37gTotal', '#q37gTotal');
    });
    $(document).on('input', '.question37Co40', function() {
      updateTotal('.question37Co40', '#question37Co40');
      updateTotal('.q37gTotal', '#q37gTotal');
    });



    $(document).on('input', '.question37RowMen', function() {
      updateTotal('.question37RowMen', '#q37MenTotal');
      updateTotal('.q37gTotal', '#q37gTotal');

    });

    $(document).on('input', '.question37RowWomen', function() {
      updateTotal('.question37RowWomen', '#q37WomenTotal');
      updateTotal('.q37gTotal', '#q37gTotal');
    });
    

    $(document).on('input', '.question37Row3rdGender', function() {
      updateTotal('.question37Row3rdGender', '#q37TrdGTotal');
      updateTotal('.q37gTotal', '#q37gTotal');

    });    

    $(document).on('input', '.question37RowBoys', function() {
      updateTotal('.question37RowBoys', '#q37BoysTotal');
      updateTotal('.q37gTotal', '#q37gTotal');
    });
    

    $(document).on('input', '.question37RowGirls', function() {
      updateTotal('.question37RowGirls', '#q37GirlsTotal');
      updateTotal('.q37gTotal', '#q37gTotal');

    });    
    
  })



//37 end question

//q40 question 

$(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    

    $(document).on('input', '.q40TotalConvictOne', function() {
      updateTotal('.q40TotalConvictOne', '#q40TotalConvictOne');
    });

    $(document).on('input', '.q40TotalConvictTwo', function() {
      updateTotal('.q40TotalConvictTwo', '#q40TotalConvictTwo');
    });

    $(document).on('input', '.q40TotalConvictThree', function() {
      updateTotal('.q40TotalConvictThree', '#q40TotalConvictThree');

    });

    $(document).on('input', '.q40PSHTOne', function() {
      updateTotal('.q40PSHTOne', '#q40PSHTOne');
    });
    

    $(document).on('input', '.q40PSHTTwo', function() {
      updateTotal('.q40PSHTTwo', '#q40PSHTTwo');
    });    

    $(document).on('input', '.q40PSHTThree', function() {
      updateTotal('.q40PSHTThree', '#q40PSHTThree');
    });
    
    $(document).on('input', '.q40OEMAOne', function() {
      updateTotal('.q40OEMAOne', '#q40OEMAOne');
    });
    

    $(document).on('input', '.q40OEMATwo', function() {
      updateTotal('.q40OEMATwo', '#q40OEMATwo');
    });    

    $(document).on('input', '.q40OEMAThree', function() {
      updateTotal('.q40OEMAThree', '#q40OEMAThree');
    });

    $(document).on('input', '.q40ConvictionsUpheldOne', function() {
      updateTotal('.q40ConvictionsUpheldOne', '#q40ConvictionsUpheldOne');
    });
    

    $(document).on('input', '.q40ConvictionsUpheldTwo', function() {
      updateTotal('.q40ConvictionsUpheldTwo', '#q40ConvictionsUpheldTwo');
    });    

    $(document).on('input', '.q40ConvictionsUpheldThree', function() {
      updateTotal('.q40ConvictionsUpheldThree', '#q40ConvictionsUpheldThree');
    });

    $(document).on('input', '.q40ConvictionsOverturnedOne', function() {
      updateTotal('.q40ConvictionsOverturnedOne', '#q40ConvictionsOverturnedOne');
    });
    

    $(document).on('input', '.q40ConvictionsOverturnedTwo', function() {
      updateTotal('.q40ConvictionsOverturnedTwo', '#q40ConvictionsOverturnedTwo');
    });    

    $(document).on('input', '.q40ConvictionsOverturnedThree', function() {
      updateTotal('.q40ConvictionsOverturnedThree', '#q40ConvictionsOverturnedThree');
    });
    $(document).on('input', '.q40IndividualAcquitOne', function() {
      updateTotal('.q40IndividualAcquitOne', '#q40IndividualAcquitOne');
    });
    

    $(document).on('input', '.q40IndividualAcquitTwo', function() {
      updateTotal('.q40IndividualAcquitTwo', '#q40IndividualAcquitTwo');
    });    

    $(document).on('input', '.q40IndividualAcquitThree', function() {
      updateTotal('.q40IndividualAcquitThree', '#q40IndividualAcquitThree');
    });  
    

    
    
  })
// 48 question

$(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    

    $(document).on('input', '.question48Col1', function() {
      updateTotal('.question48Col1', '#question48Col1');
      updateTotal('.q48gTotal', '#q48gTotal');
    });

    $(document).on('input', '.question48Col2', function() {
      updateTotal('.question48Col2', '#question48Col2');
      updateTotal('.q48gTotal', '#q48gTotal');
    });
    $(document).on('input', '.question48Col3', function() {
      updateTotal('.question48Col3', '#question48Col3');
      updateTotal('.q48gTotal', '#q48gTotal');
    });
    $(document).on('input', '.question48Col4', function() {
      updateTotal('.question48Col4', '#question48Col4');
      updateTotal('.q48gTotal', '#q48gTotal');
    });
    $(document).on('input', '.question48Col5', function() {
      updateTotal('.question48Col5', '#question48Col5');
      updateTotal('.q48gTotal', '#q48gTotal');
    });
    $(document).on('input', '.question48Col6', function() {
      updateTotal('.question48Col6', '#question48Col6');
      updateTotal('.q48gTotal', '#q48gTotal');
    });
    $(document).on('input', '.question48Col7', function() {
      updateTotal('.question48Col7', '#question48Col7');
      updateTotal('.q48gTotal', '#q48gTotal');
    });

    $(document).on('input', '.question48Col8', function() {
      updateTotal('.question48Col8', '#question48Col8');
      updateTotal('.q48gTotal', '#q48gTotal');
    });


    $(document).on('input', '.question48Col9', function() {
      updateTotal('.question48Col9', '#question48Col9');
      updateTotal('.q48gTotal', '#q48gTotal');
    });
    $(document).on('input', '.question48Co20', function() {
      updateTotal('.question48Co20', '#question48Co20');
      updateTotal('.q48gTotal', '#q48gTotal');
    });
    $(document).on('input', '.question48Co21', function() {
      updateTotal('.question48Co21', '#question48Co21');
      updateTotal('.q48gTotal', '#q48gTotal');
    });
    $(document).on('input', '.question48Co22', function() {
      updateTotal('.question48Co22', '#question48Co22');
      updateTotal('.q48gTotal', '#q48gTotal');
    });
    $(document).on('input', '.question48Co23', function() {
      updateTotal('.question48Co23', '#question48Co23');
      updateTotal('.q48gTotal', '#q48gTotal');
    });
    $(document).on('input', '.question48Co24', function() {
      updateTotal('.question48Co24', '#question48Co24');
      updateTotal('.q48gTotal', '#q48gTotal');
    });
    $(document).on('input', '.question48Co25', function() {
      updateTotal('.question48Co25', '#question48Co25');
      updateTotal('.q48gTotal', '#q48gTotal');
    });

    $(document).on('input', '.question48Co26', function() {
      updateTotal('.question48Co26', '#question48Co26');
      updateTotal('.q48gTotal', '#q48gTotal');
    });



    $(document).on('input', '.question48RowMen', function() {
      updateTotal('.question48RowMen', '#q48MenTotal');
      updateTotal('.q48gTotal', '#q48gTotal');

    });

    $(document).on('input', '.question48RowWomen', function() {
      updateTotal('.question48RowWomen', '#q48WomenTotal');
      updateTotal('.q48gTotal', '#q48gTotal');
    });
    

    $(document).on('input', '.question48Row3rdGender', function() {
      updateTotal('.question48Row3rdGender', '#q48TrdGTotal');
      updateTotal('.q48gTotal', '#q48gTotal');

    });    
  })

//48 end question


//49 question

$(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    

    $(document).on('input', '.question49Col1', function() {
      updateTotal('.question49Col1', '#question49Col1');
      updateTotal('.q49gTotal', '#q49gTotal');
    });

    $(document).on('input', '.question49Col2', function() {
      updateTotal('.question49Col2', '#question49Col2');
      updateTotal('.q49gTotal', '#q49gTotal');
    });
    $(document).on('input', '.question49Col3', function() {
      updateTotal('.question49Col3', '#question49Col3');
      updateTotal('.q49gTotal', '#q49gTotal');
    });
    $(document).on('input', '.question49Col4', function() {
      updateTotal('.question49Col4', '#question49Col4');
      updateTotal('.q49gTotal', '#q49gTotal');
    });
    $(document).on('input', '.question49Col5', function() {
      updateTotal('.question49Col5', '#question49Col5');
      updateTotal('.q49gTotal', '#q49gTotal');
    });
    $(document).on('input', '.question49Col6', function() {
      updateTotal('.question49Col6', '#question49Col6');
      updateTotal('.q49gTotal', '#q49gTotal');
    });
    $(document).on('input', '.question49Col7', function() {
      updateTotal('.question49Col7', '#question49Col7');
      updateTotal('.q49gTotal', '#q49gTotal');
    });

    $(document).on('input', '.question49Col8', function() {
      updateTotal('.question49Col8', '#question49Col8');
      updateTotal('.q49gTotal', '#q49gTotal');
    });


    $(document).on('input', '.question49Col9', function() {
      updateTotal('.question49Col9', '#question49Col9');
      updateTotal('.q49gTotal', '#q49gTotal');
    });
    $(document).on('input', '.question49Co20', function() {
      updateTotal('.question49Co20', '#question49Co20');
      updateTotal('.q49gTotal', '#q49gTotal');
    });
    $(document).on('input', '.question49Co21', function() {
      updateTotal('.question49Co21', '#question49Co21');
      updateTotal('.q49gTotal', '#q49gTotal');
    });
    $(document).on('input', '.question49Co22', function() {
      updateTotal('.question49Co22', '#question49Co22');
      updateTotal('.q49gTotal', '#q49gTotal');
    });
    $(document).on('input', '.question49Co23', function() {
      updateTotal('.question49Co23', '#question49Co23');
      updateTotal('.q49gTotal', '#q49gTotal');
    });
    $(document).on('input', '.question49Co24', function() {
      updateTotal('.question49Co24', '#question49Co24');
      updateTotal('.q49gTotal', '#q49gTotal');
    });
    $(document).on('input', '.question49Co25', function() {
      updateTotal('.question49Co25', '#question49Co25');
      updateTotal('.q49gTotal', '#q49gTotal');
    });

    $(document).on('input', '.question49Co26', function() {
      updateTotal('.question49Co26', '#question49Co26');
      updateTotal('.q49gTotal', '#q49gTotal');
    });



    $(document).on('input', '.question49RowMen', function() {
      updateTotal('.question49RowMen', '#q48MenTotal');
      updateTotal('.q49gTotal', '#q49gTotal');

    });

    $(document).on('input', '.question49RowWomen', function() {
      updateTotal('.question49RowWomen', '#q48WomenTotal');
      updateTotal('.q49gTotal', '#q49gTotal');
    });
    

    $(document).on('input', '.question49Row3rdGender', function() {
      updateTotal('.question49Row3rdGender', '#q49TrdGTotal');
      updateTotal('.q49gTotal', '#q49gTotal');

    });    
  })
//49 question end

//20 question
$(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    

    $(document).on('input', '.question20Col1', function() {
      updateTotal('.question20Col1', '#question20Col1');
      updateTotal('.q20gTotal', '#q20gTotal');
    });

    $(document).on('input', '.question20Col2', function() {
      updateTotal('.question20Col2', '#question20Col2');
      updateTotal('.q20gTotal', '#q20gTotal');
    });
    $(document).on('input', '.question20Col3', function() {
      updateTotal('.question20Col3', '#question20Col3');
      updateTotal('.q20gTotal', '#q20gTotal');
    });
    $(document).on('input', '.question20Col4', function() {
      updateTotal('.question20Col4', '#question20Col4');
      updateTotal('.q20gTotal', '#q20gTotal');
    });
    $(document).on('input', '.question20Col5', function() {
      updateTotal('.question20Col5', '#question20Col5');
      updateTotal('.q20gTotal', '#q20gTotal');
    });
    $(document).on('input', '.question20Col6', function() {
      updateTotal('.question20Col6', '#question20Col6');
      updateTotal('.q20gTotal', '#q20gTotal');
    });
    $(document).on('input', '.question20Col7', function() {
      updateTotal('.question20Col7', '#question20Col7');
      updateTotal('.q20gTotal', '#q20gTotal');
    });

    $(document).on('input', '.question20Col8', function() {
      updateTotal('.question20Col8', '#question20Col8');
      updateTotal('.q20gTotal', '#q20gTotal');
    });


    $(document).on('input', '.question20Col9', function() {
      updateTotal('.question20Col9', '#question20Col9');
      updateTotal('.q20gTotal', '#q20gTotal');
    });
    $(document).on('input', '.question20Co20', function() {
      updateTotal('.question20Co20', '#question20Co20');
      updateTotal('.q20gTotal', '#q20gTotal');
    });
  
   


    $(document).on('input', '.question20RowMen', function() {
      updateTotal('.question20RowMen', '#q20MenTotal');
      updateTotal('.q20gTotal', '#q20gTotal');

    });

    $(document).on('input', '.question20RowWomen', function() {
      updateTotal('.question20RowWomen', '#q20WomenTotal');
      updateTotal('.q20gTotal', '#q20gTotal');
    });
    

    $(document).on('input', '.question20Row3rdGender', function() {
      updateTotal('.question20Row3rdGender', '#q20TrdGTotal');
      updateTotal('.q20gTotal', '#q20gTotal');

    });    
  })


//20 question end

//question 9 

$(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    

    $(document).on('input', '.question9Col1', function() {
      updateTotal('.question9Col1', '#question9Col1');
      updateTotal('.q9gTotal', '#q9gTotal');
    });

    $(document).on('input', '.question9Col2', function() {
      updateTotal('.question9Col2', '#question9Col2');
      updateTotal('.q9gTotal', '#q9gTotal');
    });
    $(document).on('input', '.question9Col3', function() {
      updateTotal('.question9Col3', '#question9Col3');
      updateTotal('.q9gTotal', '#q9gTotal');
    });
    $(document).on('input', '.question9Col4', function() {
      updateTotal('.question9Col4', '#question9Col4');
      updateTotal('.q9gTotal', '#q9gTotal');
    });
    $(document).on('input', '.question9Col5', function() {
      updateTotal('.question9Col5', '#question9Col5');
      updateTotal('.q9gTotal', '#q9gTotal');
    });
    $(document).on('input', '.question9Col6', function() {
      updateTotal('.question9Col6', '#question9Col6');
      updateTotal('.q9gTotal', '#q9gTotal');
    });
    $(document).on('input', '.question9Col7', function() {
      updateTotal('.question9Col7', '#question9Col7');
      updateTotal('.q9gTotal', '#q9gTotal');
    });
    $(document).on('input', '.question9Col8', function() {
      updateTotal('.question9Col8', '#question9Col8');
      updateTotal('.q9gTotal', '#q9gTotal');
    });
    $(document).on('input', '.question9Col9', function() {
      updateTotal('.question9Col9', '#question9Col9');
      updateTotal('.q9gTotal', '#q9gTotal');
    });
    $(document).on('input', '.question9Co20', function() {
      updateTotal('.question9Co20', '#question9Co20');
      updateTotal('.q9gTotal', '#q9gTotal');
    });

    $(document).on('input', '.question9Co21', function() {
      updateTotal('.question9Co21', '#question9Co21');
      updateTotal('.q9gTotal', '#q9gTotal');
    });

    $(document).on('input', '.question9Co22', function() {
      updateTotal('.question9Co22', '#question9Co22');
      updateTotal('.q9gTotal', '#q9gTotal');
    });
    $(document).on('input', '.question9Co23', function() {
      updateTotal('.question9Co23', '#question9Co23');
      updateTotal('.q9gTotal', '#q9gTotal');
    });
    $(document).on('input', '.question9Co24', function() {
      updateTotal('.question9Co24', '#question9Co24');
      updateTotal('.q9gTotal', '#q9gTotal');
    });

    $(document).on('input', '.question9Co25', function() {
      updateTotal('.question9Co25', '#question9Co25');
      updateTotal('.q9gTotal', '#q9gTotal');
    });

    $(document).on('input', '.question9Co26', function() {
      updateTotal('.question9Co26', '#question9Co26');
      updateTotal('.q9gTotal', '#q9gTotal');
    });

    $(document).on('input', '.question9Co27', function() {
      updateTotal('.question9Co27', '#question9Co27');
      updateTotal('.q9gTotal', '#q9gTotal');
    });

     $(document).on('input', '.question9Co28', function() {
      updateTotal('.question9Co28', '#question9Co28');
      updateTotal('.q9gTotal', '#q9gTotal');
    });



    $(document).on('input', '.question9RowMen', function() {
      updateTotal('.question9RowMen', '#q9MenTotal');
      updateTotal('.q9gTotal', '#q9gTotal');

    });

    $(document).on('input', '.question9RowWomen', function() {
      updateTotal('.question9RowWomen', '#q9WomenTotal');
      updateTotal('.q9gTotal', '#q9gTotal');
    });
    

    $(document).on('input', '.question9Row3rdGender', function() {
      updateTotal('.question9Row3rdGender', '#q9TrdGTotal');
      updateTotal('.q9gTotal', '#q9gTotal');

    });    

    $(document).on('input', '.question9RowBoys', function() {
      updateTotal('.question9RowBoys', '#q9BoysTotal');
      updateTotal('.q9gTotal', '#q9gTotal');
    });
    

    $(document).on('input', '.question9RowGirls', function() {
      updateTotal('.question9RowGirls', '#q9GirlsTotal');
      updateTotal('.q9gTotal', '#q9gTotal');

    });    
    
  })

  //question 9 end



  //question 9/2
  $(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    

    $(document).on('input', '.question10Col1', function() {
      updateTotal('.question10Col1', '#question10Col1');
      updateTotal('.q10gTotal', '#q10gTotal');
    });

    $(document).on('input', '.question10Col2', function() {
      updateTotal('.question10Col2', '#question10Col2');
      updateTotal('.q10gTotal', '#q10gTotal');
    });
    $(document).on('input', '.question10Col3', function() {
      updateTotal('.question10Col3', '#question10Col3');
      updateTotal('.q10gTotal', '#q10gTotal');
    });
    $(document).on('input', '.question10Col4', function() {
      updateTotal('.question10Col4', '#question10Col4');
      updateTotal('.q10gTotal', '#q10gTotal');
    });
    $(document).on('input', '.question10Col5', function() {
      updateTotal('.question10Col5', '#question10Col5');
      updateTotal('.q10gTotal', '#q10gTotal');
    });
    $(document).on('input', '.question10Col6', function() {
      updateTotal('.question10Col6', '#question10Col6');
      updateTotal('.q10gTotal', '#q10gTotal');
    });
    $(document).on('input', '.question10Col7', function() {
      updateTotal('.question10Col7', '#question10Col7');
      updateTotal('.q10gTotal', '#q10gTotal');
    });
    $(document).on('input', '.question10Col8', function() {
      updateTotal('.question10Col8', '#question10Col8');
      updateTotal('.q10gTotal', '#q10gTotal');
    });
    $(document).on('input', '.question10Col9', function() {
      updateTotal('.question10Col9', '#question10Col9');
      updateTotal('.q10gTotal', '#q10gTotal');
    });
    $(document).on('input', '.question10Co20', function() {
      updateTotal('.question10Co20', '#question10Co20');
      updateTotal('.q10gTotal', '#q10gTotal');
    });

    $(document).on('input', '.question10Co21', function() {
      updateTotal('.question10Co21', '#question10Co21');
      updateTotal('.q10gTotal', '#q10gTotal');
    });

    $(document).on('input', '.question10Co22', function() {
      updateTotal('.question10Co22', '#question10Co22');
      updateTotal('.q10gTotal', '#q10gTotal');
    });
    $(document).on('input', '.question10Co23', function() {
      updateTotal('.question10Co23', '#question10Co23');
      updateTotal('.q10gTotal', '#q10gTotal');
    });
    $(document).on('input', '.question10Co24', function() {
      updateTotal('.question10Co24', '#question10Co24');
      updateTotal('.q10gTotal', '#q10gTotal');
    });

    $(document).on('input', '.question10Co25', function() {
      updateTotal('.question10Co25', '#question10Co25');
      updateTotal('.q10gTotal', '#q10gTotal');
    });

    $(document).on('input', '.question10Co26', function() {
      updateTotal('.question10Co26', '#question10Co26');
      updateTotal('.q10gTotal', '#q10gTotal');
    });

    $(document).on('input', '.question10Co27', function() {
      updateTotal('.question10Co27', '#question10Co27');
      updateTotal('.q10gTotal', '#q10gTotal');
    });

     $(document).on('input', '.question10Co28', function() {
      updateTotal('.question10Co28', '#question10Co28');
      updateTotal('.q10gTotal', '#q10gTotal');
    });



    $(document).on('input', '.question10RowMen', function() {
      updateTotal('.question10RowMen', '#q10MenTotal');
      updateTotal('.q10gTotal', '#q10gTotal');

    });

    $(document).on('input', '.question10RowWomen', function() {
      updateTotal('.question10RowWomen', '#q10WomenTotal');
      updateTotal('.q10gTotal', '#q10gTotal');
    });
    

    

  
    

    
    
  })
  //question 9/2 end
  // Question  53

  $(document).ready(function() {
    // A function to update the total for a specific group of inputs
    function updateTotal(inputsClass, totalId) {
      let sum = 0;
      $(inputsClass).each(function() {
        sum += parseFloat($(this).val()) || 0;
      });
      $(totalId).val(sum);
    }
    

    $(document).on('input', '.q53Col', function() {
      updateTotal('.q53Col', '#q53Total');
    });

  });

    
  $(document).ready(function() {
          $('.multiSelect').select2({
          placeholder: "--- Select Location ---"
        });
    });

     //ckeditor  
     ClassicEditor
        .create( document.querySelector( '#editor' ))
        .then( editor => {
          editor.model.document.on('change:data', (evt, data) => {
            var plainText = $(editor.getData()).text();
            let maxLength=500
            if(plainText.length>maxLength){
              editor.setData(plainText.substring(0, maxLength-1));
            }
           });
        } )
        .catch( error => {
                console.error( error );
        } );
        $('#mostRiskSelect').on("change",function(){
          // alert($(this).val())
          $('.question2').find('#q2_others_specify_id1').hide()
          $('.question2').find('#q2_others_specify_id1').val("")
          if($(this).val()==='11'){
            $('.question2').find('#q2_others_specify_id1').show()
          }

        });
        $('#moderateRiskSelect').on("change",function(){
          // alert($(this).val())
          $('.question2').find('#q2_others_specify_id2').hide()
          $('.question2').find('#q2_others_specify_id2').val("")
          if($(this).val()==='11'){
            $('.question2').find('#q2_others_specify_id2').show()
          }

        });
        $('#leastRiskSelect').on("change",function(){
          // alert($(this).val())
          $('.question2').find('#q2_others_specify_id3').hide()
          $('.question2').find('#q2_others_specify_id3').val("")
          if($(this).val()==='11'){
            $('.question2').find('#q2_others_specify_id3').show()
          }

        });
        //
        $('#q16LegalStatus').on("change",function(){
          $('.question16').find('#q16_legal_other_specify').hide()
          $('.question16').find('#q16_legal_other_specify').val("")
          if($(this).val()==='9'){
            $('.question16').find('#q16_legal_other_specify').show()
          }
        })

        $('#q16trafficking_status').on("change",function(){
          $('.question16').find('#q16_trafficking_other_specify').hide()
          $('.question16').find('#q16_trafficking_other_specify').val("")
          if($(this).val()==='9'){
            $('.question16').find('#q16_trafficking_other_specify').show()
          }
        })

        $('#q16_sexual_status').on("change",function(){
          $('.question16').find('#q16_sexual_other_specify').hide()
          $('.question16').find('#q16_sexual_other_specify').val("")
          if($(this).val()==='9'){
            $('.question16').find('#q16_sexual_other_specify').show()
          }
        })

        $('#q16_other_status1').on("change",function(){
          $('.question16').find('#q16_other_specify1').hide()
          $('.question16').find('#q16_other_specify1').val("")
          if($(this).val()==='9'){
            $('.question16').find('#q16_other_specify1').show()
          }
        })
        $('#q16_other_status2').on("change",function(){
          $('.question16').find('#q16_other_specify2').hide()
          $('.question16').find('#q16_other_specify2').val("")
          if($(this).val()==='9'){
            $('.question16').find('#q16_other_specify2').show()
          }
        })
        $('#q16_other_status3').on("change",function(){
          $('.question16').find('#q16_other_specify3').hide()
          $('.question16').find('#q16_other_specify3').val("")
          if($(this).val()==='9'){
            $('.question16').find('#q16_other_specify3').show()
          }
        });
        $('#q17_awareness_raising_forced_prostitution').on("change",function(){
          $('.question17').find('#q17_awareness_raising_prostitution').hide()
          $('.question17').find('#q17_awareness_raising_prostitution').val("")
          if($(this).val()==='9'){
            $('.question17').find('#q17_awareness_raising_prostitution').show()
          }
        })
        $('#q17_awareness_raising_forced_trafficked').on("change",function(){
          $('.question17').find('#q17_awareness_raising_exploitation').hide()
          $('.question17').find('#q17_awareness_raising_exploitation').val("")
          if($(this).val()==='9'){
            $('.question17').find('#q17_awareness_raising_exploitation').show()
          }
        })
        $('#q17_legal_action_foreign').on("change",function(){
          $('.question17').find('#q17_awareness_raising_foreign').hide()
          $('.question17').find('#q17_awareness_raising_foreign').val("")
          if($(this).val()==='9'){
            $('.question17').find('#q17_awareness_raising_foreign').show()
          }
        });

        $('#q21_psht_identification').on("change",function(){
          $('.question21').find('#q21_psht_act').hide()
          $('.question21').find('#q21_psht_act').val("")
          if($(this).val()==="9"){
            $('.question21').find('#q21_psht_act').show()
          }
        });
        $('#q21_nrm_identification').on("change",function(){
          $('.question21').find('#q21_nrm_guideline').hide()
          $('.question21').find('#q21_nrm_guideline').val("")
          if($(this).val()==="9"){
            $('.question21').find('#q21_nrm_guideline').show()
          }
        });
        $('#q21_twenty_1').on("change",function(){
          $('.question21').find('#q21_others_specifiy1').hide()
          $('.question21').find('#q21_others_specifiy1').val("")
          if($(this).val()==="9"){
            $('.question21').find('#q21_others_specifiy1').show()
          }
        });
        $('#q21_twenty_2').on("change",function(){
          $('.question21').find('#q21_others_specifiy2').hide()
          $('.question21').find('#q21_others_specifiy2').val("")
          if($(this).val()==="9"){
            $('.question21').find('#q21_others_specifiy2').show()
          }
        });
        $('#q21_twenty_3').on("change",function(){
          $('.question21').find('#q21_others_specifiy3').hide()
          $('.question21').find('#q21_others_specifiy3').val("")
          if($(this).val()==="9"){
            $('.question21').find('#q21_others_specifiy3').show()
          }
        });

        $('#q22_victim_identification_psd').on("change",function(){
          $('.question22').find('#q22_victim_psd').hide()
          $('.question22').find('#q22_victim_psd').val("")
          if($(this).val()==="9"){
            $('.question22').find('#q22_victim_psd').show()
          }
        });
        $('#q22_psht_identification').on("change",function(){
          $('.question22').find('#q22_psht_act').hide()
          $('.question22').find('#q22_psht_act').val("")
          if($(this).val()==="9"){
            $('.question22').find('#q22_psht_act').show()
          }
        });
        $('#q22_identification_mosw').on("change",function(){
          $('.question22').find('#q22_victim_identification').hide()
          $('.question22').find('#q22_victim_identification').val("")
          if($(this).val()==="9"){
            $('.question22').find('#q22_victim_identification').show()
          }
        });
        $('#q22_vot_identification_nrm_moha').on("change",function(){
          $('.question22').find('#q22_vot_identification_nrm').hide()
          $('.question22').find('#q22_vot_identification_nrm').val("")
          if($(this).val()==="9"){
            $('.question22').find('#q22_vot_identification_nrm').show()
          }
        });
        $('#q22_twenty_two_1').on("change",function(){
          $('.question22').find('#q22_others_specify1').hide()
          $('.question22').find('#q22_others_specify1').val("")
          if($(this).val()==="9"){
            $('.question22').find('#q22_others_specify1').show()
          }
        });
        $('#q22_twenty_two_2').on("change",function(){
          $('.question22').find('#q22_others_specify2').hide()
          $('.question22').find('#q22_others_specify2').val("")
          if($(this).val()==="9"){
            $('.question22').find('#q22_others_specify2').show()
          }
        });
        $('#q22_twenty_two_3').on("change",function(){
          $('.question22').find('#q22_others_specify3').hide()
          $('.question22').find('#q22_others_specify3').val("")
          if($(this).val()==="9"){
            $('.question22').find('#q22_others_specify3').show()
          }
        });

        $('#q23_screen_mosw').on("change",function(){
          $('.question23').find('#q23_screen_via_mosw').hide()
          $('.question23').find('#q23_screen_via_mosw').val("")
          if($(this).val()==="9"){
            $('.question23').find('#q23_screen_via_mosw').show()
          }
        });
        $('#q23_victim_identification_psd').on("change",function(){
          $('.question23').find('#q23_victim_identification_guideline').hide()
          $('.question23').find('#q23_victim_identification_guideline').val("")
          if($(this).val()==="9"){
            $('.question23').find('#q23_victim_identification_guideline').show()
          }
        });
        $('#q23_screen_carried_police').on("change",function(){
          $('.question23').find('#q23_screen_carried_pshta').hide()
          $('.question23').find('#q23_screen_carried_pshta').val("")
          if($(this).val()==="9"){
            $('.question23').find('#q23_screen_carried_pshta').show()
          }
        });
        $('#q23_twenty_three_1').on("change",function(){
          $('.question23').find('#q23_others_specify1').hide()
          $('.question23').find('#q23_others_specify1').val("")
          if($(this).val()==="9"){
            $('.question23').find('#q23_others_specify1').show()
          }
        });
        $('#q23_twenty_three_2').on("change",function(){
          $('.question23').find('#q23_others_specify2').hide()
          $('.question23').find('#q23_others_specify2').val("")
          if($(this).val()==="9"){
            $('.question23').find('#q23_others_specify2').show()
          }
        });
        $('#q23_twenty_three_3').on("change",function(){
          $('.question23').find('#q23_others_specify3').hide()
          $('.question23').find('#q23_others_specify3').val("")
          if($(this).val()==="9"){
            $('.question23').find('#q23_others_specify3').show()
          }
        });
        //q24 others specify input field
        $('#q24_referral_desk_established').on("change",function(){
          $('.question24').find('#referral_desk_established').hide()
          $('.question24').find('#referral_desk_established').val("")
          if($(this).val()==="9"){
            $('.question24').find('#referral_desk_established').show()
          }
        });
        $('#q24_national_referral_mechanism').on("change",function(){
          $('.question24').find('#national_referral_mechanism').hide()
          $('.question24').find('#national_referral_mechanism').val("")
          if($(this).val()==="9"){
            $('.question24').find('#national_referral_mechanism').show()
          }
        });
        $('#q24_national_referral_sop').on("change",function(){
          $('.question24').find('#national_referral_sop').hide()
          $('.question24').find('#national_referral_sop').val("")
          if($(this).val()==="9"){
            $('.question24').find('#national_referral_sop').show()
          }
        });
        $('#q24_digital_referral_moha').on("change",function(){
          $('.question24').find('#digital_referral_moha').hide()
          $('.question24').find('#digital_referral_moha').val("")
          if($(this).val()==="9"){
            $('.question24').find('#digital_referral_moha').show()
          }
        });
        $('#q24_others_specify_one').on("change",function(){
          $('.question24').find('#others_specify_one').hide()
          $('.question24').find('#others_specify_one').val("")
          if($(this).val()==="9"){
            $('.question24').find('#others_specify_one').show()
          }
        });
        $('#q24_others_specify_two').on("change",function(){
          $('.question24').find('#others_specify_two').hide()
          $('.question24').find('#others_specify_two').val("")
          if($(this).val()==="9"){
            $('.question24').find('#others_specify_two').show()
          }
        });
        $('#q24_others_specify_three').on("change",function(){
          $('.question24').find('#others_specify_three').hide()
          $('.question24').find('#others_specify_three').val("")
          if($(this).val()==="9"){
            $('.question24').find('#others_specify_three').show()
          }
        });
        
  });
</script>

@endsection