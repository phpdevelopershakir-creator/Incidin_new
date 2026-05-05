@if(Auth::user()->can('12.question'))


@php
$counties=DB::table('countries')->get();
@endphp
   
    <div class="col-md-12 question12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">12.Any new agreements, with a transparent oversight mechanism, with other countries
            on safe and
            responsible labor recruitment that included measures</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
       
        

        
 

          <div id="twevel_question_view" class="card-body row">
          <table id="addRowQ12" class="table table-bordered text-center">
            <thead>
              <tr>
                <th scope="col">Country</th>
                <th scope="col">Instrument</th>
                <th scope="col">Attach/Upload/Summary</th>
      
              </tr>
            </thead>
            <tbody>
            @foreach($case->twelve as $twelve)
              <tr>
                <td >
                {{$twelve->country->name ?? ''}}
                </td>
                <td> 
                @if ($twelve->instrument	 == 1)
                Bil-Lateral Agreement
                @elseif ($twelve->instrument	 == 2)
                Mutual Legal Arrangement
                @elseif ($twelve->instrument	 == 3)
                MoU
                @elseif ($twelve->instrument	 == 4)
                Trade Treaty
                @elseif ($twelve->instrument	 == 4)
                G to G agreement
                @endif
                </td>
                <td> 
                  @if(!empty($twelve->upload_summary))
                  <a href="{{ asset($twelve->upload_summary) }}" target="_blank">
                    View
                  </a>
                  @else
                  Not Found
                  @endif

                  
                <!-- <img id="logo" src="{{ asset($twelve->upload_summary) }}" width="50" height="50;" /> -->
                 
                </td>
                
              
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
    @endif
