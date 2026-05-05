@if(Auth::user()->can('27.question'))
 <!-- question no 27 Start  -->
 <div class="col-md-12">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">27.Where were child victims placed (e.g., in shelters, foster care, or child
        development centers), and what kind of specialized care did they receive? Please describe coverage?</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th rowspan="2">Location</th>
            <th rowspan="2">Type of Facility</th>
            <th rowspan="2">Number of Facility</th>
            <th colspan="3">Number of children</th>
          </tr>

          <tr>
            <th>Boy</th>
            <th>Girl</th>
            <th>Total</th>
          </tr>
        </thead>
                @php
                $boysTotal = 0;
                $girlsTotal = 0;
                $grandTotal = 0;
             @endphp
        @foreach($case->twentyseven as $twentyseven)
        <tr>
          <th >
          @if ($twentyseven->location_id_q27	 == 1)
                     Barisal
                @elseif ($twentyseven->location_id_q27	 == 2)
                Chattogram
                @elseif ($twentyseven->location_id_q27	 == 3)
                Dhaka
                @elseif ($twentyseven->location_id_q27	 == 4)
                Khulna
                @elseif ($twentyseven->location_id_q27	 == 5)
                Mymensingh
                @elseif ($twentyseven->location_id_q27	 ==6)
                Rajshahi
                @elseif ($twentyseven->location_id_q27	 == 7)
                Rangpur
                @elseif ($twentyseven->location_id_q27	 == 8)
                Sylhet
                @elseif ($twentyseven->location_id_q27	 == 9)
                National
                @endif
           
          </th>
          <th>@if ($twentyseven->type_facility == 1)
          Shelter
                @elseif ($twentyseven->type_facility == 2)
                Development Center	
         
                @endif

            
          </th>
          <th >{{$twentyseven->number_facility}}  </th>
          <th >{{$twentyseven->number_children_boy_q27}}  </th>
          <th >{{$twentyseven->number_children_girl_q27}}  </th>
          <th >{{$twentyseven->number_children_total_q27}}  </th>
     
        </tr>
       
              @php
                $boysTotal += $twentyseven->number_children_boy_q27;
                $girlsTotal += $twentyseven->number_children_girl_q27;
                $grandTotal += $twentyseven->number_children_total_q27;
            @endphp
        @endforeach
         <tr style="font-weight:bold; background:#f1f1f1;">
                <td colspan="3" style="text-align:right;">Total:</td>
                <td>{{ $boysTotal }}</td>
                <td>{{ $girlsTotal }}</td>
                <td>{{ $grandTotal }}</td>
            </tr>

      </table>
    </div>
  </div>
</div>
<!-- question no 27 end -->

@endif