<?php
if (($questiontitles[11]->status ?? null) == 1) {

?>


    <div class="card question61">
        <div class="card-header" role="tab" id="heading-4">
            <h6 class="card-title" style="color: {{ isset($question_61_data) ? 'blue' : 'black' }};">
                <a data-toggle="collapse" href="#Question-12" aria-expanded="false"
                    aria-controls="collapse-4">
                    12.{{ $questiontitles[1]->title }}
                </a>
            </h6>
        </div>

        <div id="Question-12" class="collapse" role="tabpane12" aria-labelledby="heading-4"
            data-parent="#accordion-2">
            <div class="card-body">
                @php
                $index = 65;
                @endphp
                @foreach($twelveGrouped as $country => $rows)

                <h5 class="mt-3">{{ chr($index++) }}. {{ $labels[$country] ?? $country }}</h5>

                <table class="table table-bordered text-center">
                    <tr>
                        <th>Country/Region/International Law Enforcement Organization</th>
                        <th>Sex Trafficking</th>
                        <th>Labour Trafficking</th>
                        <th>Other/Unspecific Trafficking</th>
                        <th>Total</th>
                    </tr>

                    @foreach($rows as $twelve)
                    <tr>
                        <td>{{ $twelve->government_cooperate_foreign_counterparts_country_q12 }}</td> 
                        <td>{{ $twelve->government_cooperate_foreign_counterparts_sex_trafficking_q12 }}</td>
                        <td>{{ $twelve->government_cooperate_foreign_counterparts_labour_trafficking_q1 }}</td>
                        <td>{{ $twelve->government_cooperate_foreign_counterparts_other_trafficking_q12 }}</td>
                        <td>{{ $twelve->government_cooperate_foreign_counterparts_total_trafficking_q12 }}</td>
                    </tr>
                    @endforeach

                </table>

                @endforeach






            </div>
        </div>
    </div>
<?php } ?>