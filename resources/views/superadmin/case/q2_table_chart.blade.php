<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        .page_break  { page-break-inside: avoid; page-break-after: always; }
        .q2-table table{
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #000;
        }
        .blank-cell{ min-width: 15px; }
        .row_cell{ padding: 8px; }
        th, td { font-size: 13px; border: 1px solid #000; }
        .heading { background-color: #28a745; }
        .pie-chart {
            width: 600px;
            height: 400px;
            margin: 0 auto;
        }
        .text-center{ text-align: center; }
    </style>
</head>
<body>

<div class="q2-table-chart">
    <div class="q2-table">
        <table class="table table-bordered" id="q2_individual_activities">
            <thead>
                <tr>
                    <th class="text-center">Level of Risky community</th>
                    <th class="text-center">Choose of vulnerable-list</th>
                    <th class="text-center">Others (Specify)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sex_labers as $sex_location)
                    <tr>
                        <td class="row_cell">
                            <div>
                                @if($sex_location->level_risky_community == 1)
                                    Most at risk
                                @elseif($sex_location->level_risky_community == 2)
                                    Moderately at risk
                                @elseif($sex_location->level_risky_community == 3)
                                    Least at Risk
                                @endif
                            </div>
                        </td>

                        <td class="row_cell">
                            <div>
                                @if($sex_location->choose_vulnerable_list_id == 1)
                                    Migrant Men
                                @elseif($sex_location->choose_vulnerable_list_id == 2)
                                    Migrant Women
                                @elseif($sex_location->choose_vulnerable_list_id == 3)
                                    3rd G
                                @elseif($sex_location->choose_vulnerable_list_id == 4)
                                    Girls of Poor Household
                                @elseif($sex_location->choose_vulnerable_list_id == 5)
                                    Boys of Poor Household
                                @elseif($sex_location->choose_vulnerable_list_id == 6)
                                    Men
                                @elseif($sex_location->choose_vulnerable_list_id == 7)
                                    Women
                                @elseif($sex_location->choose_vulnerable_list_id == 8)
                                    Children of Sex Worker
                                @elseif($sex_location->choose_vulnerable_list_id == 9)
                                    Child Labour
                                @elseif($sex_location->choose_vulnerable_list_id == 10)
                                    Street Children
                                @elseif($sex_location->choose_vulnerable_list_id == 11)
                                    Other (Specify) 
                                @endif
                            </div>
                        </td>

                        <td class="row_cell">
                            <div>{{ $sex_location->others_specify_id }}</div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
