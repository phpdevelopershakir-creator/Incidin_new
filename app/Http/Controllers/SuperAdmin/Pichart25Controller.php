<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\helper;
use App\Models\TwentyFive;
use DB;
use PDF;

global $protection_services_q25;
global $q25_status_id;
$protection_services_q25=array('1'=>'Economic Support/assest transfer', '2'=>'Micro Credit', '3'=>'Livelihood Training', 
'4'=>'Job placement', '5'=>'Health care', '6'=>'Psychosocial care', '7'=>'Shelter', '8'=>'Social safetynet',
 '9'=>'Information support', '10'=>'Mainstream education', '11'=>'Non Formal Education', '12'=>'Technical Education',
  '13'=>'Life skill', '14'=>'Family reunion', '15'=>'Referral');  
  
  $q25_status_id=array('1'=>'New', '2'=>'Existing'); 
class Pichart25Controller extends Controller
{




public static function getting_awarness_data ($participant=false){
global $protection_services_q25;
global $q25_status_id;
$awarness_data =TwentyFive::awarness_activities_q25_query_data();
$q25_current_coverage_vots_men =0;
$q25_current_coverage_vots_women =0;
$q25_current_coverage_vots_third_gender =0;
$total_adult=0;
$total_children=0;
$q25_current_coverage_vots_boy =0;
$q25_current_coverage_vots_girl =0;
$total_perticipant=0;
$awarness_category_data=[];
if($participant){ 
        foreach ($awarness_data as $row) {
        $total_adult_by_category=$row->q25_current_coverage_vots_men+$row->q25_current_coverage_vots_women+
        $row->q25_current_coverage_vots_third_gender;
        $total_children_by_category=$row->q25_current_coverage_vots_boy+$row->q25_current_coverage_vots_girl;
        $total_people= $total_adult_by_category+$total_children_by_category;
        $total_perticipant += $total_people;
        }
}
$gtotal_people=0;
foreach ($awarness_data as $row) {
        $category=[];
        $q25_current_coverage_vots_men+=$row->q25_current_coverage_vots_men;
        $q25_current_coverage_vots_women+=$row->q25_current_coverage_vots_women;
        $q25_current_coverage_vots_third_gender+=$row->q25_current_coverage_vots_third_gender;
        $q25_current_coverage_vots_boy+=$row->q25_current_coverage_vots_boy;
        $q25_current_coverage_vots_girl+=$row->q25_current_coverage_vots_girl;         
        $total_adult_by_category=$row->q25_current_coverage_vots_men+$row->q25_current_coverage_vots_women+$row->q25_current_coverage_vots_third_gender;
        $total_adult +=$total_adult_by_category;
        $total_children_by_category=$row->q25_current_coverage_vots_boy+$row->q25_current_coverage_vots_girl;
        $total_children +=$total_children_by_category;
        $total_people= $total_adult_by_category+$total_children_by_category;
        $gtotal_people += $total_people;
        $men_perchantege=helper::percentage_calculation($row->q25_current_coverage_vots_men, $participant ? $total_perticipant : $total_people);
        $women_perchantege=helper::percentage_calculation($row->q25_current_coverage_vots_women,$participant ? $total_perticipant :$total_people);
        $thirdg_perchantege=helper::percentage_calculation($row->q25_current_coverage_vots_third_gender,$participant ? $total_perticipant : $total_people);
        $boys_perchantege=helper::percentage_calculation($row->q25_current_coverage_vots_boy,$participant ? $total_perticipant : $total_people);
        $girls_perchantege=helper::percentage_calculation($row->q25_current_coverage_vots_girl,$participant ? $total_perticipant : $total_people);
        $children_perchnatage=helper::percentage_calculation($total_children_by_category,$participant ? $total_perticipant : $total_people);
        $total_adult_perchantage=helper::percentage_calculation($total_adult_by_category,$participant ? $total_perticipant : $total_people);
        $percentage_of_total_population=helper::percentage_calculation($total_people,$participant ? $total_perticipant : $total_people);
        // print_r($q25_status_id);
        // exit();
        $category=array(
        'protection_services_q25'=>helper::arraykeys_to_value($protection_services_q25,$row->protection_services_q25),
        'q25_status_id'=>helper::arraykeys_to_value($q25_status_id,$row->q25_status_id),
        'q25_current_coverage_vots_men'=> $row->q25_current_coverage_vots_men, 
        'men_perchantege'=> $men_perchantege,   
        'q25_current_coverage_vots_women'=> $row->q25_current_coverage_vots_women, 
        'women_perchantege'=> $women_perchantege, 
        'q25_current_coverage_vots_third_gender'=> $row->q25_current_coverage_vots_third_gender, 
        'thirdg_perchantege'=>$thirdg_perchantege,
        'q25_current_coverage_vots_third_gender'=> $q25_current_coverage_vots_third_gender, 
        'percentage_third_gender'=>$thirdg_perchantege,
        'q25_current_coverage_vots_boy' => $row->q25_current_coverage_vots_boy,
        'boys_perchantege'=>$boys_perchantege,
        'q25_current_coverage_vots_girl' => $row->q25_current_coverage_vots_girl,
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
        'protection_services_q25'=>'Total',
        'q25_status_id'=>'',
        'q25_current_coverage_vots_men'=> $q25_current_coverage_vots_men, 
        'men_perchantege'=> helper::percentage_calculation($q25_current_coverage_vots_men,$gtotal_people),   
        'q25_current_coverage_vots_women'=>$q25_current_coverage_vots_women, 
        'women_perchantege'=> helper::percentage_calculation($q25_current_coverage_vots_women,$gtotal_people), 
        'q25_current_coverage_vots_third_gender'=> $q25_current_coverage_vots_third_gender, 
        'thirdg_perchantege'=>helper::percentage_calculation($q25_current_coverage_vots_third_gender,$gtotal_people),
        'total_third_gender'=> $q25_current_coverage_vots_third_gender, 
        'percentage_third_gender'=>helper::percentage_calculation($q25_current_coverage_vots_third_gender,$gtotal_people),
        'q25_current_coverage_vots_boy' => $q25_current_coverage_vots_boy,
        'boys_perchantege'=>helper::percentage_calculation($q25_current_coverage_vots_boy,$gtotal_people),
        'q25_current_coverage_vots_girl' => $q25_current_coverage_vots_girl,
        'girls_perchantege'=>helper::percentage_calculation($q25_current_coverage_vots_girl,$gtotal_people),
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
              .'<td id="protection_services_q25" class="blank-cell row_cell">'.$row['protection_services_q25'].'</td>'
              .'<td id="q25_status_id" class="blank-cell row_cell">'.$row['q25_status_id'].'</td>'
              .'<td id="q25_current_coverage_vots_men" class="blank-cell row_cell">'.$row['q25_current_coverage_vots_men'].'</td>'
              .'<td id="men_perchantege" class="blank-cell row_cell">'.$row['men_perchantege'].'</td>'   
              .'<td id="q25_current_coverage_vots_women" class="blank-cell row_cell">'.$row['q25_current_coverage_vots_women'].'</td>'
              .'<td id="women_perchantege" class="blank-cell row_cell">'.$row['women_perchantege'].'</td>'
              .'<td id="q25_current_coverage_vots_third_gender" class="blank-cell row_cell">'.$row['q25_current_coverage_vots_third_gender'].'</td>'
              .'<td id="thirdg_perchantege" class="blank-cell row_cell">'.$row['thirdg_perchantege'].'</td>'
              .'<td id="total_adult_by_category" class="blank-cell row_cell">'.$row['total_adult_by_category'].'</td>'
              .'<td id="total_adult_perchantage" class="blank-cell row_cell">'.$row['total_adult_perchantage'].'</td>'
              .'<td id="q25_current_coverage_vots_boy" class="blank-cell row_cell">'.$row['q25_current_coverage_vots_boy'].'</td>'
              .'<td id="boys_perchantege" class="blank-cell row_cell">'.$row['boys_perchantege'].'</td>'
              .'<td id="q25_current_coverage_vots_girl" class="blank-cell row_cell">'.$row['q25_current_coverage_vots_girl'].'</td>'
              .'<td id="girls_perchantege" class="blank-cell row_cell">'.$row['girls_perchantege'].'</td>'
              .'<td id="total_children_by_category" class="blank-cell row_cell">'.$row['total_children_by_category'].'</td>'
              .'<td id="children_perchnatage" class="blank-cell row_cell">'.$row['children_perchnatage'].'</td>'
              .'<td id="total_protect_meeting" class="blank-cell row_cell">'.$row['total_people'].'</td>'
              .'<td id="totalPeotedMetting" class="blank-cell row_cell">'.$row['percentage_of_total_population'].'</td>'     
              .'</tr>';
            $rows .=$row;
            }
        } 
        return $rows;
    }




    public function adult25()
    {
        $awarness_data =$this->getting_awarness_data();
     $rows=$this->htmlRows($awarness_data);
    return response()->json([
        'status' => 'success', 
        'data' =>[
            'q25_category_data' =>$rows,
          ],
      ], 200);
     exit();
    
    }

    public function participants25()
    {
        $awarness_data =$this->getting_awarness_data(true);
      $rows=$this->htmlRows($awarness_data);
        return response()->json([
            'status' => 'success', 
            'data' =>[
                'q25_category_data' =>$rows,
              ],
          ], 200);
        exit();
    }

    public function q25_generate_pdf()
    {
      
      $awarness_data_table1 =$this->getting_awarness_data();
      $awarness_data_table2 =$this->getting_awarness_data(true);
      $table1_rows=$this->htmlRows($awarness_data_table1);
      $table2_rows=$this->htmlRows($awarness_data_table2);
      // $category_pie_chart_data=$this->awarness_all_partcipants();
      $pdf=PDF::loadView('superadmin.case.q25_table_chart',compact('table1_rows','table2_rows')); // test using image for ''data''
      $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif','isJavascriptEnabled'=>true]);
      // $pdf->setOption('enable-javascript', true);
      // $pdf->setOption('javascript-delay', 5000);
      // $pdf->setOption('enable-smart-shrinking', true);
      // $pdf->setOption('no-stop-slow-scripts', true);
      return $pdf->stream('q25_chart.pdf');
    }


   

   
   
}
