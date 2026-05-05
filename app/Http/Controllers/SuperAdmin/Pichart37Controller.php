<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\helper;
use App\Models\ThirtySeven;
use DB;
use PDF;
global $q37_type_cases_investigated;
global $q37_category_coverage;

$q37_type_cases_investigated=array('1'=>'Number of cases prosecuted','2'=>'Number of cases prosecuted (ongoing from the previous reporting period)'
,'3'=>'Number of cases prosecuted (new this reporting period)','4'=>'Number of individuals prosecuted'
,'5'=>'Number of individuals i prosecuted (ongoing from the previous reporting period)','6'=>'Number of individuals prosecuted (new this reporting period)',
'7'=>'Number of individuals cases under PSHT Act 2012','8'=>'Number of cases prosecuted under non-trafficking laws (OEMA/PC)',
'9'=>'Number of individuals prosecuted under PSHT Act 2012','10'=>'Number of individuals prosecuted under non-trafficking laws (OEMA/PC)'); 
$q37_category_coverage=array('1'=>'Number of Victims of Sex Trafficking Cases', '2'=>'Number of Victims of Labour Trafficking Cases','3'=>'Number of Victims of Other/unspecified Trafficking Cases '); 

class Pichart37Controller extends Controller
{
   

      public static function getting_awarness_data ($participant=false){
        global $q37_type_cases_investigated;
        global $q37_category_coverage;
      
        $awarness_data =ThirtySeven::awarness_activities_q37_query_data();
        $q37_new_report_sex_trafficking_cases_men =0;
        $q37_new_report_sex_trafficking_cases_women =0;
        $q37_new_report_sex_trafficking_cases_third_gender =0;
        $total_adult=0;
        $total_children=0;
        $q37_new_report_sex_trafficking_cases_boy =0;
        $q37_new_report_sex_trafficking_cases_girl =0;
        $total_perticipant=0;
        $awarness_category_data=[];
        if($participant){ 
          foreach ($awarness_data as $row) {
            $total_adult_by_category=$row->q37_new_report_sex_trafficking_cases_men+$row->q37_new_report_sex_trafficking_cases_women+$row->q37_new_report_sex_trafficking_cases_third_gender;
            $total_children_by_category=$row->q37_new_report_sex_trafficking_cases_boy+$row->q37_new_report_sex_trafficking_cases_girl;
            $total_people= $total_adult_by_category+$total_children_by_category;
            $total_perticipant += $total_people;
          }
      }
      $gtotal_people=0;
        foreach ($awarness_data as $row) {
            $category=[];
            $q37_new_report_sex_trafficking_cases_men+=$row->q37_new_report_sex_trafficking_cases_men;
            $q37_new_report_sex_trafficking_cases_women+=$row->q37_new_report_sex_trafficking_cases_women;
            $q37_new_report_sex_trafficking_cases_third_gender+=$row->q37_new_report_sex_trafficking_cases_third_gender;
            $q37_new_report_sex_trafficking_cases_boy+=$row->q37_new_report_sex_trafficking_cases_boy;
            $q37_new_report_sex_trafficking_cases_girl+=$row->q37_new_report_sex_trafficking_cases_girl;         
            $total_adult_by_category=$row->q37_new_report_sex_trafficking_cases_men+$row->q37_new_report_sex_trafficking_cases_women+$row->q37_new_report_sex_trafficking_cases_third_gender;
            $total_adult +=$total_adult_by_category;
            $total_children_by_category=$row->q37_new_report_sex_trafficking_cases_boy+$row->q37_new_report_sex_trafficking_cases_girl;
            $total_children +=$total_children_by_category;
            $total_people= $total_adult_by_category+$total_children_by_category;
            $gtotal_people += $total_people;
            $men_perchantege=helper::percentage_calculation($row->q37_new_report_sex_trafficking_cases_men, $participant ? $total_perticipant : $total_people);
            $women_perchantege=helper::percentage_calculation($row->q37_new_report_sex_trafficking_cases_women,$participant ? $total_perticipant :$total_people);
            $thirdg_perchantege=helper::percentage_calculation($row->q37_new_report_sex_trafficking_cases_third_gender,$participant ? $total_perticipant : $total_people);
            $boys_perchantege=helper::percentage_calculation($row->q37_new_report_sex_trafficking_cases_boy,$participant ? $total_perticipant : $total_people);
            $girls_perchantege=helper::percentage_calculation($row->q37_new_report_sex_trafficking_cases_girl,$participant ? $total_perticipant : $total_people);
            $children_perchnatage=helper::percentage_calculation($total_children_by_category,$participant ? $total_perticipant : $total_people);
            $total_adult_perchantage=helper::percentage_calculation($total_adult_by_category,$participant ? $total_perticipant : $total_people);
            $percentage_of_total_population=helper::percentage_calculation($total_people,$participant ? $total_perticipant : $total_people);
            $category=array(
              'q37_type_cases_investigated'=>helper::arraykeys_to_value($q37_type_cases_investigated,$row->q37_type_cases_investigated),
              'q37_category_coverage'=>helper::arraykeys_to_value($q37_category_coverage,$row->q37_category_coverage),
              'q37_new_report_sex_trafficking_cases_men'=> $row->q37_new_report_sex_trafficking_cases_men, 
              'men_perchantege'=> $men_perchantege,   
              'q37_new_report_sex_trafficking_cases_women'=> $row->q37_new_report_sex_trafficking_cases_women, 
              'women_perchantege'=> $women_perchantege, 
              'q37_new_report_sex_trafficking_cases_third_gender'=> $row->q37_new_report_sex_trafficking_cases_third_gender, 
              'thirdg_perchantege'=>$thirdg_perchantege,
              'total_third_gender'=> $q37_new_report_sex_trafficking_cases_third_gender, 
              'percentage_third_gender'=>$thirdg_perchantege,
              'q37_new_report_sex_trafficking_cases_boy' => $row->q37_new_report_sex_trafficking_cases_boy,
              'boys_perchantege'=>$boys_perchantege,
              'q37_new_report_sex_trafficking_cases_girl' => $row->q37_new_report_sex_trafficking_cases_girl,
              'girls_perchantege'=>$girls_perchantege,
              'total_children_by_category' => $total_children_by_category,
              'children_perchnatage'=>$children_perchnatage,
              'total_adult_by_category'=>$total_adult_by_category,
              'total_people'=>$total_people,
              'total_adult_perchantage'=>$total_adult_perchantage,
              'percentage_of_total_population'=>$percentage_of_total_population,
            );
            array_push($awarness_category_data,$category);         
        }
        if(count($awarness_category_data)>0){
            $total_category=array(
              'q37_type_cases_investigated'=>'Total',
              'q37_category_coverage'=>'',
              'q37_new_report_sex_trafficking_cases_men'=> $q37_new_report_sex_trafficking_cases_men, 
              'men_perchantege'=> helper::percentage_calculation($q37_new_report_sex_trafficking_cases_men,$gtotal_people),   
              'q37_new_report_sex_trafficking_cases_women'=>$q37_new_report_sex_trafficking_cases_women, 
              'women_perchantege'=> helper::percentage_calculation($q37_new_report_sex_trafficking_cases_women,$gtotal_people), 
              'q37_new_report_sex_trafficking_cases_third_gender'=> $q37_new_report_sex_trafficking_cases_third_gender, 
              'thirdg_perchantege'=>helper::percentage_calculation($q37_new_report_sex_trafficking_cases_third_gender,$gtotal_people),
              'total_third_gender'=> $q37_new_report_sex_trafficking_cases_third_gender, 
              'percentage_third_gender'=>helper::percentage_calculation($q37_new_report_sex_trafficking_cases_third_gender,$gtotal_people),
              'q37_new_report_sex_trafficking_cases_boy' => $q37_new_report_sex_trafficking_cases_boy,
              'boys_perchantege'=>helper::percentage_calculation($q37_new_report_sex_trafficking_cases_boy,$gtotal_people),
              'q37_new_report_sex_trafficking_cases_girl' => $q37_new_report_sex_trafficking_cases_girl,
              'girls_perchantege'=>helper::percentage_calculation($q37_new_report_sex_trafficking_cases_girl,$gtotal_people),
              'total_children_by_category' => $total_children,
              'children_perchnatage'=>helper::percentage_calculation($total_children,$gtotal_people),
              'total_adult_by_category'=>$total_adult,
              'total_people'=>$gtotal_people,
              'total_adult_perchantage'=>helper::percentage_calculation($total_adult,$gtotal_people),
              'percentage_of_total_population'=> $participant ? helper::percentage_calculation($gtotal_people,$gtotal_people) : $percentage_of_total_population,
            );
            array_push($awarness_category_data,$total_category); 
        }     
        return $awarness_category_data;
    }

    public function htmlRows ($data_array) {
        $rows="";
        if(isset( $data_array) && !empty( $data_array)){
            foreach($data_array as $row){
              $row ='<tr>'
              .'<td id="q37_type_cases_investigated" class="blank-cell row_cell">'.$row['q37_type_cases_investigated'].'</td>'
              .'<td id="q37_category_coverage" class="blank-cell row_cell">'.$row['q37_category_coverage'].'</td>'
              .'<td id="q37_new_report_sex_trafficking_cases_men" class="blank-cell row_cell">'.$row['q37_new_report_sex_trafficking_cases_men'].'</td>'
              .'<td id="men_perchantege" class="blank-cell row_cell">'.$row['men_perchantege'].'</td>'   
              .'<td id="q37_new_report_sex_trafficking_cases_women" class="blank-cell row_cell">'.$row['q37_new_report_sex_trafficking_cases_women'].'</td>'
              .'<td id="women_perchantege" class="blank-cell row_cell">'.$row['women_perchantege'].'</td>'
              .'<td id="q37_new_report_sex_trafficking_cases_third_gender" class="blank-cell row_cell">'.$row['q37_new_report_sex_trafficking_cases_third_gender'].'</td>'
              .'<td id="thirdg_perchantege" class="blank-cell row_cell">'.$row['thirdg_perchantege'].'</td>'
              .'<td id="total_adult_by_category" class="blank-cell row_cell">'.$row['total_adult_by_category'].'</td>'
              .'<td id="total_adult_perchantage" class="blank-cell row_cell">'.$row['total_adult_perchantage'].'</td>'
              .'<td id="q37_new_report_sex_trafficking_cases_boy" class="blank-cell row_cell">'.$row['q37_new_report_sex_trafficking_cases_boy'].'</td>'
              .'<td id="boys_perchantege" class="blank-cell row_cell">'.$row['boys_perchantege'].'</td>'
              .'<td id="q37_new_report_sex_trafficking_cases_girl" class="blank-cell row_cell">'.$row['q37_new_report_sex_trafficking_cases_girl'].'</td>'
              .'<td id="girls_perchantege" class="blank-cell row_cell">'.$row['girls_perchantege'].'</td>'
              .'<td id="total_children_by_category" class="blank-cell row_cell">'.$row['total_children_by_category'].'</td>'
              .'<td id="children_perchnatage" class="blank-cell row_cell">'.$row['children_perchnatage'].'</td>'
              .'<td id="total_protect_meeting" class="blank-cell row_cell">'.$row['total_people'].'</td>'
              .'<td id="totalProtedMetting" class="blank-cell row_cell">'.$row['percentage_of_total_population'].'</td>'     
              .'</tr>';
            $rows .=$row;
            }
        } 
        return $rows;
    }

    public function adult37()
    {
        $awarness_data =$this->getting_awarness_data();
     $rows=$this->htmlRows($awarness_data);
    return response()->json([
        'status' => 'success', 
        'data' =>[
            'q37_category_data' =>$rows,
          ],
      ], 200);
     exit();
    
    }

    public function participants37()
    {
        $awarness_data =$this->getting_awarness_data(true);
      $rows=$this->htmlRows($awarness_data);
        return response()->json([
            'status' => 'success', 
            'data' =>[
                'q37_category_data' =>$rows,
              ],
          ], 200);
        exit();
    }

    public function q37_generate_pdf()
    {
      
      $awarness_data_table1 =$this->getting_awarness_data();
      $awarness_data_table2 =$this->getting_awarness_data(true);
      $table1_rows=$this->htmlRows($awarness_data_table1);
      $table2_rows=$this->htmlRows($awarness_data_table2);
      // $category_pie_chart_data=$this->awarness_all_partcipants();
      $pdf=PDF::loadView('superadmin.case.q37_table_chart',compact('table1_rows','table2_rows')); // test using image for ''data''
      $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif','isJavascriptEnabled'=>true]);
      // $pdf->setOption('enable-javascript', true);
      // $pdf->setOption('javascript-delay', 5000);
      // $pdf->setOption('enable-smart-shrinking', true);
      // $pdf->setOption('no-stop-slow-scripts', true);
      return $pdf->stream('q37_chart.pdf');
    }
}
