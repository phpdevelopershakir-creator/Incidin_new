<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\helper;
use App\Models\ThirtyFour;
use DB;
use PDF;
global $location_id_q34;
global $types_assistance_q34;
$location_id_q34=array('1'=>'Barisal', '2'=>'Chattogram', '3'=>'Dhaka', '4'=>'Khulna',
 '5'=>'Mymensingh', '6'=>'Rajshahi', '7'=>'Rangpur', '8'=>'Sylhet', '9'=>'National'); 
 $types_assistance_q34=array('1'=>'Psychosocial Counselling', '2'=>'Shelter','3'=>'Assistance to persons with disability','4'=>'Testimony via video or written statements','5'=>'Others Specify (on click other Specify, textbox will open below the box)'); 
class Pichart34Controller extends Controller
{

   

      public static function getting_awarness_data ($participant=false){
        global $location_id_q34;
        global $types_assistance_q34;
        $awarness_data =ThirtyFour::awarness_activities_q34_query_data();
        $q34_coverage_men =0;
        $q34_coverage_women =0;
        $q34_coverage_third_gender =0;
        $total_adult=0;
        $total_children=0;
        $q34_coverage_boy =0;
        $q34_coverage_girl =0;
        $total_perticipant=0;
        $awarness_category_data=[];
        if($participant){ 
          foreach ($awarness_data as $row) {
            $total_adult_by_category=$row->q34_coverage_men+$row->q34_coverage_women+$row->q34_coverage_third_gender;
            $total_children_by_category=$row->q34_coverage_boy+$row->q34_coverage_girl;
            $total_people= $total_adult_by_category+$total_children_by_category;
            $total_perticipant += $total_people;
          }
      }
      $gtotal_people=0;
        foreach ($awarness_data as $row) {
            $category=[];
            $q34_coverage_men+=$row->q34_coverage_men;
            $q34_coverage_women+=$row->q34_coverage_women;
            $q34_coverage_third_gender+=$row->q34_coverage_third_gender;
            $q34_coverage_boy+=$row->q34_coverage_boy;
            $q34_coverage_girl+=$row->q34_coverage_girl;         
            $total_adult_by_category=$row->q34_coverage_men+$row->q34_coverage_women+$row->q34_coverage_third_gender;
            $total_adult +=$total_adult_by_category;
            $total_children_by_category=$row->q34_coverage_boy+$row->q34_coverage_girl;
            $total_children +=$total_children_by_category;
            $total_people= $total_adult_by_category+$total_children_by_category;
            $gtotal_people += $total_people;
            $men_perchantege=helper::percentage_calculation($row->q34_coverage_men, $participant ? $total_perticipant : $total_people);
            $women_perchantege=helper::percentage_calculation($row->q34_coverage_women,$participant ? $total_perticipant :$total_people);
            $thirdg_perchantege=helper::percentage_calculation($row->q34_coverage_third_gender,$participant ? $total_perticipant : $total_people);
            $boys_perchantege=helper::percentage_calculation($row->q34_coverage_boy,$participant ? $total_perticipant : $total_people);
            $girls_perchantege=helper::percentage_calculation($row->q34_coverage_girl,$participant ? $total_perticipant : $total_people);
            $children_perchnatage=helper::percentage_calculation($total_children_by_category,$participant ? $total_perticipant : $total_people);
            $total_adult_perchantage=helper::percentage_calculation($total_adult_by_category,$participant ? $total_perticipant : $total_people);
            $percentage_of_total_population=helper::percentage_calculation($total_people,$participant ? $total_perticipant : $total_people);
            $category=array(
              'location_id_q34'=>helper::arraykeys_to_value($location_id_q34,$row->location_id_q34),
              'types_assistance_q34'=>helper::arraykeys_to_value($types_assistance_q34,$row->types_assistance_q34),
              'q34_coverage_men'=> $row->q34_coverage_men, 
              'men_perchantege'=> $men_perchantege,   
              'q34_coverage_women'=> $row->q34_coverage_women, 
              'women_perchantege'=> $women_perchantege, 
              'q34_coverage_third_gender'=> $row->q34_coverage_third_gender, 
              'thirdg_perchantege'=>$thirdg_perchantege,
              'q34_coverage_third_gender'=> $q34_coverage_third_gender, 
              'percentage_third_gender'=>$thirdg_perchantege,
              'q34_coverage_boy' => $row->q34_coverage_boy,
              'boys_perchantege'=>$boys_perchantege,
              'q34_coverage_girl' => $row->q34_coverage_girl,
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
              'location_id_q34'=>'Total',
              'types_assistance_q34'=>'',
              'q34_coverage_men'=> $q34_coverage_men, 
              'men_perchantege'=> helper::percentage_calculation($q34_coverage_men,$gtotal_people),   
              'q34_coverage_women'=>$q34_coverage_women, 
              'women_perchantege'=> helper::percentage_calculation($q34_coverage_women,$gtotal_people), 
              'q34_coverage_third_gender'=> $q34_coverage_third_gender, 
              'thirdg_perchantege'=>helper::percentage_calculation($q34_coverage_third_gender,$gtotal_people),
              'total_third_gender'=> $q34_coverage_third_gender, 
              'percentage_third_gender'=>helper::percentage_calculation($q34_coverage_third_gender,$gtotal_people),
              'q34_coverage_boy' => $q34_coverage_boy,
              'boys_perchantege'=>helper::percentage_calculation($q34_coverage_boy,$gtotal_people),
              'q34_coverage_girl' => $q34_coverage_girl,
              'girls_perchantege'=>helper::percentage_calculation($q34_coverage_girl,$gtotal_people),
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
              .'<td id="location_id_q34" class="blank-cell row_cell">'.$row['location_id_q34'].'</td>'
              .'<td id="types_assistance_q34" class="blank-cell row_cell">'.$row['types_assistance_q34'].'</td>'
              .'<td id="q34_coverage_men" class="blank-cell row_cell">'.$row['q34_coverage_men'].'</td>'
              .'<td id="men_perchantege" class="blank-cell row_cell">'.$row['men_perchantege'].'</td>'   
              .'<td id="q34_coverage_women" class="blank-cell row_cell">'.$row['q34_coverage_women'].'</td>'
              .'<td id="women_perchantege" class="blank-cell row_cell">'.$row['women_perchantege'].'</td>'
              .'<td id="q34_coverage_third_gender" class="blank-cell row_cell">'.$row['q34_coverage_third_gender'].'</td>'
              .'<td id="thirdg_perchantege" class="blank-cell row_cell">'.$row['thirdg_perchantege'].'</td>'
              .'<td id="total_adult_by_category" class="blank-cell row_cell">'.$row['total_adult_by_category'].'</td>'
              .'<td id="total_adult_perchantage" class="blank-cell row_cell">'.$row['total_adult_perchantage'].'</td>'
              .'<td id="q34_coverage_boy" class="blank-cell row_cell">'.$row['q34_coverage_boy'].'</td>'
              .'<td id="boys_perchantege" class="blank-cell row_cell">'.$row['boys_perchantege'].'</td>'
              .'<td id="q34_coverage_girl" class="blank-cell row_cell">'.$row['q34_coverage_girl'].'</td>'
              .'<td id="girls_perchantege" class="blank-cell row_cell">'.$row['girls_perchantege'].'</td>'
              .'<td id="total_children_by_category" class="blank-cell row_cell">'.$row['total_children_by_category'].'</td>'
              .'<td id="children_perchnatage" class="blank-cell row_cell">'.$row['children_perchnatage'].'</td>'
              .'<td id="total_courtyard_meeting" class="blank-cell row_cell">'.$row['total_people'].'</td>'
              .'<td id="totalCourtyuardMetting" class="blank-cell row_cell">'.$row['percentage_of_total_population'].'</td>'     
              .'</tr>';
            $rows .=$row;
            }
        } 
        return $rows;
    }
  
  

    public function adult34()
    {
        $awarness_data =$this->getting_awarness_data();
        $rows=$this->htmlRows($awarness_data);
       return response()->json([
           'status' => 'success', 
           'data' =>[
               'q34_category_data' =>$rows,
             ],
         ], 200);
        exit();
    }

    public function participants34()
    {
        $awarness_data =$this->getting_awarness_data(true);
        $rows=$this->htmlRows($awarness_data);
          return response()->json([
              'status' => 'success', 
              'data' =>[
                  'q34_category_data' =>$rows,
                ],
            ], 200);
          exit();
    }

    public function q34_generate_pdf()
    {
      
      $awarness_data_table1 =$this->getting_awarness_data();
      $awarness_data_table2 =$this->getting_awarness_data(true);
      $table1_rows=$this->htmlRows($awarness_data_table1);
      $table2_rows=$this->htmlRows($awarness_data_table2);
      // $category_pie_chart_data=$this->awarness_all_partcipants();
      $pdf=PDF::loadView('superadmin.case.q34_table_chart',compact('table1_rows','table2_rows')); // test using image for ''data''
      $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif','isJavascriptEnabled'=>true]);
      // $pdf->setOption('enable-javascript', true);
      // $pdf->setOption('javascript-delay', 5000);
      // $pdf->setOption('enable-smart-shrinking', true);
      // $pdf->setOption('no-stop-slow-scripts', true);
      return $pdf->stream('q34_chart.pdf');
    }


    
}
