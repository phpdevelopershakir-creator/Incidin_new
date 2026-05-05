@if(Auth::user()->can('38.question'))
<div class="col-md-12 question38">
  <div class="card card-outline collapsed-card">
    <div class="card-header">
      <h3 class="card-title">38.Did the government cooperate with foreign counterparts on any law enforcement
        activities?</h3>
        @php
        $counties=DB::table('countries')->get();
        @endphp
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>

     


    </div>
   
    <div class="card-body">
      <div id ="38_question_view" class="card-body row">
      <table id="addRowQ38" class="table table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">Country</th>
            <th scope="col">Sex Trafficking</th>
            <th scope="col">Labour Trafficking</th>
            <th scope="col">Other/Unspecific Trafficking</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
            @foreach($case->thirtyeight as $thirtyeight)

            <tr>
            <td>
            {{$thirtyeight->country->name ?? ''}}

            </td>

            <td>
            {{$thirtyeight->sex_trafficking}}
            </td> 
            <td>
            {{$thirtyeight->labour_trafficking}}
            </td>
            <td>
            {{$thirtyeight->other_unspecific_trafficking}}
            </td> 
            <td>
            {{$thirtyeight->total}}
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

