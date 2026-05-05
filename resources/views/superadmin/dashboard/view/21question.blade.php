@if(Auth::user()->can('21.question'))
@php
$twenty_ones=DB::table('standard_procedures_identification_q21')->limit(5)->get();


@endphp
<div class="col-md-12 question21">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">21.Were there any new (or changes to preexisting) formal/standard procedures for
        victim identification
        at your ministry/agency/organization?</h3>

      <div class="card-tools">
        <button id="q21-dashboard-data-view" type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
     
      

    
    <a style="margin:5px;" href="{{url('q21-pdf-view')}}" target="_blank" class="btn btn-info float-right">PDF Dawnload</a>

 <table class="table table-white">
        <thead>
          <tr>
            <th scope="col">Main document/Procedure</th>
            <th scope="col">Description of change/Status</th>
            <th scope="col">Attach/Upload</th>
          </tr>
        </thead>
        <tbody>
             @foreach($twenty_ones as $twenty_one)
          <tr>
            <td>
                 @if($twenty_one->q21_main_document_procedure == 1)
                 PSHT Act 2012 on VoT identification
               @elseif($twenty_one->q21_main_document_procedure == 2)
               NRM guideline on VoT identification
               @else
                 {{ $twenty_one->q21_main_document_procedure ?? ''  }}


                 @endif
                 </td>
            <td>
                <div>
                     @if($twenty_one->q21_status_id == 1)
                Enforced
               @elseif($twenty_one->q21_status_id == 2)
               Updated and enforced
               @elseif($twenty_one->q21_status_id == 3)
               Stricter enforcement
               @elseif($twenty_one->q21_status_id == 4)
              Increased efforts
               @elseif($twenty_one->q21_status_id == 5)
               Moderate Effortt
               @elseif($twenty_one->q21_status_id == 6)
               Less Effort
               @elseif($twenty_one->q21_status_id == 7)
               Poor Enforcement
               @elseif($twenty_one->q21_status_id == 8)
                Under Review
               @elseif($twenty_one->q21_status_id == 9)
                
                  {{ $twenty_one->q21_others_specify ?? '' }}
                  @endif
                </div>
              
             </td>
            <td>
                @if(!empty($twenty_one->upload_file_21))
    <a href="{{ asset($twenty_one->upload_file_21) }}" target="_blank">
      View
    </a>
    @else
    Not Found
    @endif

                <!-- <img id="logo" src="{{ asset($twenty_one->upload_file_21) }}" width="50" height="50;" /> -->

                
               
                </td>
          </tr>
           @endforeach
        
  
        </tbody>
      </table>
 
    </div>
  </div>
</div>
@endif