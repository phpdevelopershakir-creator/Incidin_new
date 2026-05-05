@if(Auth::user()->can('31.question'))

<style>
  .otherSpecify{
    display:none;
  }
</style>
<div class="col-md-12 question31">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">31.Were foreign victims legally entitled to the same benefits as host country
        nationals?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
  
    <div class="card-body">
      
  <div id="31_question_view">
    <div class="card-body">
        <table id="addRowQ31Internal" class="table table-bordered text-center">
            <thead class="">
                <tr>
                  <!-- <th rowspan="2" style="text-align: center; margin: bottom 45%;">Types of Hotlines</th> -->
                  <th rowspan="2">Implementer</th>
                  <th rowspan="2">Hotline number</th>
                  <th colspan="8">Coverage</th>
                </tr>
                <tr>
                  <th>Men</th>
                  <th>Women</th>
                  <th>3rd Gender </th>
                  <th>Boy</th>
                  <th>Girls</th>
                  <th>Total</th>
                </tr>
            </thead>
            <tbody>
          @foreach($case->thirtyone as $thirtyone)

                <tr>

                  <td colspan="10">
                    @if($thirtyone->q31_type==1)
                    Internal Trafficking
                    @elseif($thirtyone->q31_type==2)
                    International Trafficking
                  
                    @endif  
                  </td>
                 


                </tr>

                <tr>
                  <td>
                  @if ($thirtyone->q31_traffick_type_of_hotlines == 1)
                  Government run/ free
                  @elseif ($thirtyone->q31_traffick_type_of_hotlines == 2)
                  Government supported
                  @elseif ($thirtyone->q31_traffick_type_of_hotlines == 3)
                  NGO RUN
                  @elseif ($thirtyone->q31_traffick_type_of_hotlines == 4)
                  {{$thirtyone->q31_traffick_others_specify}}                  
                  @endif
                    
                  </td>

                    <td>
                    @if ($thirtyone->q31_implementer_traffick == 1)
                    MoWCA
                  @elseif ($thirtyone->q31_implementer_traffick == 2)
                  MoHA
                  @elseif ($thirtyone->q31_implementer_traffick == 3)
                  MoSW
                  @elseif ($thirtyone->q31_implementer_traffick == 4)
                  MoEWOE
                  @elseif ($thirtyone->q31_implementer_traffick == 5)
                  MoLJPA
                  @elseif ($thirtyone->q31_implementer_traffick == 6)
                  INCIDIN Bangladesh
                  @elseif ($thirtyone->q31_implementer_traffick == 7)
                  Ask
                  @elseif ($thirtyone->q31_implementer_traffick == 8)
                  BNWLA
                  @elseif ($thirtyone->q31_implementer_traffick == 9)
                  DAM
                  @endif
                     
                  </td>


                  <td>
            {{$thirtyone->q31_traffick_hotline_number}}
            </td> 
                  <td>
            {{$thirtyone->q31_traffick_men}}
            </td> 
            <td>
            {{$thirtyone->q31_traffick_women}}
            </td>
            <td>
            {{$thirtyone->q31_traffick_third_gender}}
            </td> 
            <td>
            {{$thirtyone->q31_traffick_boys}}
            <td>
            {{$thirtyone->q31_traffick_girls}}
            </td> 
            <td>
            {{$thirtyone->q31_traffick_total}}
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



