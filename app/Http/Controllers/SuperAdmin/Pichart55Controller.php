<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Helpers\helper;
use Illuminate\Http\Request;
use App\Models\FiftyFive;
use DB;
use PDF;
global $q55_type_activities;

$q55_type_activities=array('1'=>'GO-NGO Coordination', '2'=>'Facilitation of CTC Members (Union)', '3'=>'Facilitation of CTC Members (Upazilla)',
 '4'=>'Facilitation of CTC Members (District)', '5'=>'Facilitation of Private Sector',
  '6'=>'Development Partners', '7'=>'Networking Meeting', '8'=>'Workshop/Conference/Seminar/Meeting',
   '9'=>'MoU', '10'=>'Others (Specify)'); 

class Pichart55Controller extends Controller
{


      public static function getting_awarness_data ($participant=false){
        global $q55_type_activities;
      
        $awarness_data =FiftyFive::awarness_activities_q9_query_data();
        $q55_individuals_covered_men =0;
        $q55_individuals_covered_women =0;
        $q55_individuals_covered_third_gender =0;
        $total_adult=0;
        $total_children=0;
        $q55_individuals_covered_boy =0;
        $q55_individuals_covered_girl =0;
        $total_perticipant=0;
        $awarness_category_data=[];
        if($participant){ 
          foreach ($awarness_data as $row) {
            $total_adult_by_category=$row->q55_individuals_covered_men+$row->q55_individuals_covered_women+$row->q55_individuals_covered_third_gender;
            $total_children_by_category=$row->q55_individuals_covered_boy+$row->q55_individuals_covered_girl;
            $total_people= $total_adult_by_category+$total_children_by_category;
            $total_perticipant += $total_people;
          }
      }
      $gtotal_people=0;
        foreach ($awarness_data as $row) {
            $category=[];
            $q55_individuals_covered_men+=$row->q55_individuals_covered_men;
            $q55_individuals_covered_women+=$row->q55_individuals_covered_women;
            $q55_individuals_covered_third_gender+=$row->q55_individuals_covered_third_gender;
            $q55_individuals_covered_boy+=$row->q55_individuals_covered_boy;
            $q55_individuals_covered_girl+=$row->q55_individuals_covered_girl;         
            $total_adult_by_category=$row->q55_individuals_covered_men+$row->q55_individuals_covered_women+$row->q55_individuals_covered_third_gender;
            $total_adult +=$total_adult_by_category;
            $total_children_by_category=$row->q55_individuals_covered_boy+$row->q55_individuals_covered_girl;
            $total_children +=$total_children_by_category;
            $total_people= $total_adult_by_category+$total_children_by_category;
            $gtotal_people += $total_people;
            $men_perchantege=helper::percentage_calculation($row->q55_individuals_covered_men, $participant ? $total_perticipant : $total_people);
            $women_perchantege=helper::percentage_calculation($row->q55_individuals_covered_women,$participant ? $total_perticipant :$total_people);
            $thirdg_perchantege=helper::percentage_calculation($row->q55_individuals_covered_third_gender,$participant ? $total_perticipant : $total_people);
            $boys_perchantege=helper::percentage_calculation($row->q55_individuals_covered_boy,$participant ? $total_perticipant : $total_people);
            $girls_perchantege=helper::percentage_calculation($row->q55_individuals_covered_girl,$participant ? $total_perticipant : $total_people);
            $children_perchnatage=helper::percentage_calculation($total_children_by_category,$participant ? $total_perticipant : $total_people);
            $total_adult_perchantage=helper::percentage_calculation($total_adult_by_category,$participant ? $total_perticipant : $total_people);
            $percentage_of_total_population=helper::percentage_calculation($total_people,$participant ? $total_perticipant : $total_people);
            $category=array(
              'q55_type_activities'=>helper::arraykeys_to_value($q55_type_activities,$row->q55_type_activities),
        
              'q55_individuals_covered_men'=> $row->q55_individuals_covered_men, 
              'men_perchantege'=> $men_perchantege,   
              'q55_individuals_covered_women'=> $row->q55_individuals_covered_women, 
              'women_perchantege'=> $women_perchantege, 
              'q55_individuals_covered_third_gender'=> $row->q55_individuals_covered_third_gender, 
              'thirdg_perchantege'=>$thirdg_perchantege,
              'total_third_gender'=> $q55_individuals_covered_third_gender, 
              'percentage_third_gender'=>$thirdg_perchantege,
              'q55_individuals_covered_boy' => $row->q55_individuals_covered_boy,
              'boys_perchantege'=>$boys_perchantege,
              'q55_individuals_covered_girl' => $row->q55_individuals_covered_girl,
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
              'q55_type_activities'=>'Total',
              'q55_district_id'=>'',
              'q55_individuals_covered_men'=> $q55_individuals_covered_men, 
              'men_perchantege'=> helper::percentage_calculation($q55_individuals_covered_men,$gtotal_people),   
              'q55_individuals_covered_women'=>$q55_individuals_covered_women, 
              'women_perchantege'=> helper::percentage_calculation($q55_individuals_covered_women,$gtotal_people), 
              'q55_individuals_covered_third_gender'=> $q55_individuals_covered_third_gender, 
              'thirdg_perchantege'=>helper::percentage_calculation($q55_individuals_covered_third_gender,$gtotal_people),
              'total_third_gender'=> $q55_individuals_covered_third_gender, 
              'percentage_third_gender'=>helper::percentage_calculation($q55_individuals_covered_third_gender,$gtotal_people),
              'q55_individuals_covered_boy' => $q55_individuals_covered_boy,
              'boys_perchantege'=>helper::percentage_calculation($q55_individuals_covered_boy,$gtotal_people),
              'q55_individuals_covered_girl' => $q55_individuals_covered_girl,
              'girls_perchantege'=>helper::percentage_calculation($q55_individuals_covered_girl,$gtotal_people),
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
              .'<td id="q55_type_activities" class="blank-cell row_cell">'.$row['q55_type_activities'].'</td>'
              
              .'<td id="q55_individuals_covered_men" class="blank-cell row_cell">'.$row['q55_individuals_covered_men'].'</td>'
              .'<td id="men_perchantege" class="blank-cell row_cell">'.$row['men_perchantege'].'</td>'   
              .'<td id="q55_individuals_covered_women" class="blank-cell row_cell">'.$row['q55_individuals_covered_women'].'</td>'
              .'<td id="women_perchantege" class="blank-cell row_cell">'.$row['women_perchantege'].'</td>'
              .'<td id="q55_individuals_covered_third_gender" class="blank-cell row_cell">'.$row['q55_individuals_covered_third_gender'].'</td>'
              .'<td id="thirdg_perchantege" class="blank-cell row_cell">'.$row['thirdg_perchantege'].'</td>'
              .'<td id="total_adult_by_category" class="blank-cell row_cell">'.$row['total_adult_by_category'].'</td>'
              .'<td id="total_adult_perchantage" class="blank-cell row_cell">'.$row['total_adult_perchantage'].'</td>'
              .'<td id="q55_individuals_covered_boy" class="blank-cell row_cell">'.$row['q55_individuals_covered_boy'].'</td>'
              .'<td id="boys_perchantege" class="blank-cell row_cell">'.$row['boys_perchantege'].'</td>'
              .'<td id="q55_individuals_covered_girl" class="blank-cell row_cell">'.$row['q55_individuals_covered_girl'].'</td>'
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

    public function adult55 () {
        $awarness_data =$this->getting_awarness_data();
        $rows=$this->htmlRows($awarness_data);
       return response()->json([
           'status' => 'success', 
           'data' =>[
               'q55_category_data' =>$rows,
             ],
         ], 200);
        exit();
       }
   
       public function participants55()
       {
           $awarness_data =$this->getting_awarness_data(true);
         $rows=$this->htmlRows($awarness_data);
           return response()->json([
               'status' => 'success', 
               'data' =>[
                   'q55_category_data' =>$rows,
                 ],
             ], 200);
           exit();
       }

       public function q55_generate_pdf()
        {
            $getting_aggengy_data1 =$this->getting_awarness_data();
            $getting_aggengy_data2 =$this->getting_awarness_data(true);
            $table1_rows=$this->htmlRows($getting_aggengy_data1);
            $table2_rows=$this->htmlRows($getting_aggengy_data2);
            // $category_pie_chart_data=$this->awarness_all_partcipants();
            $pdf=PDF::loadView('superadmin.case.q55_table_chart',compact('table1_rows','table2_rows')); // test using image for ''data''
            $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif','isJavascriptEnabled'=>true]);
            // $pdf->setOption('enable-javascript', true);
            // $pdf->setOption('javascript-delay', 5000);
            // $pdf->setOption('enable-smart-shrinking', true);
            // $pdf->setOption('no-stop-slow-scripts', true);
            return $pdf->stream('q55_chart.pdf');
        }
      
}
