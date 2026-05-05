<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Helpers\helper;
use Illuminate\Http\Request;
use App\Models\FiftyThree;
use DB;
use PDF;
global $number_of_case;

$number_of_case=array('1'=>'Health support', '2'=>'Compensation', '3'=>'Training',
 '4'=>'Psycho-social care', '5'=>'Shelter',
  '6'=>'Victim protection', '7'=>'Others (Specify)'); 
class Pichart53Controller extends Controller
{
    



      public static function getting_awarness_data ($participant=false){
        global $number_of_case;
      
        $awarness_data =FiftyThree::awarness_activities_q53_query_data();
        $q53_individual_coverage_men =0;
        $q53_individual_coverage_women =0;
        $q53_individual_coverage_third_gender =0;
        $total_adult=0;
        $total_children=0;
        $q53_individual_coverage_boy =0;
        $q53_individual_coverage_girl =0;
        $total_perticipant=0;
        $awarness_category_data=[];
        if($participant){ 
          foreach ($awarness_data as $row) {
            $total_adult_by_category=$row->q53_individual_coverage_men+$row->q53_individual_coverage_women+$row->q53_individual_coverage_third_gender;
            $total_children_by_category=$row->q53_individual_coverage_boy+$row->q53_individual_coverage_girl;
            $total_people= $total_adult_by_category+$total_children_by_category;
            $total_perticipant += $total_people;
          }
      }
      $gtotal_people=0;
        foreach ($awarness_data as $row) {
            $category=[];
            $q53_individual_coverage_men+=$row->q53_individual_coverage_men;
            $q53_individual_coverage_women+=$row->q53_individual_coverage_women;
            $q53_individual_coverage_third_gender+=$row->q53_individual_coverage_third_gender;
            $q53_individual_coverage_boy+=$row->q53_individual_coverage_boy;
            $q53_individual_coverage_girl+=$row->q53_individual_coverage_girl;         
            $total_adult_by_category=$row->q53_individual_coverage_men+$row->q53_individual_coverage_women+$row->q53_individual_coverage_third_gender;
            $total_adult +=$total_adult_by_category;
            $total_children_by_category=$row->q53_individual_coverage_boy+$row->q53_individual_coverage_girl;
            $total_children +=$total_children_by_category;
            $total_people= $total_adult_by_category+$total_children_by_category;
            $gtotal_people += $total_people;
            $men_perchantege=helper::percentage_calculation($row->q53_individual_coverage_men, $participant ? $total_perticipant : $total_people);
            $women_perchantege=helper::percentage_calculation($row->q53_individual_coverage_women,$participant ? $total_perticipant :$total_people);
            $thirdg_perchantege=helper::percentage_calculation($row->q53_individual_coverage_third_gender,$participant ? $total_perticipant : $total_people);
            $boys_perchantege=helper::percentage_calculation($row->q53_individual_coverage_boy,$participant ? $total_perticipant : $total_people);
            $girls_perchantege=helper::percentage_calculation($row->q53_individual_coverage_girl,$participant ? $total_perticipant : $total_people);
            $children_perchnatage=helper::percentage_calculation($total_children_by_category,$participant ? $total_perticipant : $total_people);
            $total_adult_perchantage=helper::percentage_calculation($total_adult_by_category,$participant ? $total_perticipant : $total_people);
            $percentage_of_total_population=helper::percentage_calculation($total_people,$participant ? $total_perticipant : $total_people);
            $category=array(
              'number_of_case'=>helper::arraykeys_to_value($number_of_case,$row->number_of_case),
              'q53_individual_coverage_men'=> $row->q53_individual_coverage_men, 
              'men_perchantege'=> $men_perchantege,   
              'q53_individual_coverage_women'=> $row->q53_individual_coverage_women, 
              'women_perchantege'=> $women_perchantege, 
              'q53_individual_coverage_third_gender'=> $row->q53_individual_coverage_third_gender, 
              'thirdg_perchantege'=>$thirdg_perchantege,
              'total_third_gender'=> $q53_individual_coverage_third_gender, 
              'percentage_third_gender'=>$thirdg_perchantege,
              'q53_individual_coverage_boy' => $row->q53_individual_coverage_boy,
              'boys_perchantege'=>$boys_perchantege,
              'q53_individual_coverage_girl' => $row->q53_individual_coverage_girl,
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
              'number_of_case'=>'Total',
              'q53_individual_coverage_men'=> $q53_individual_coverage_men, 
              'men_perchantege'=> helper::percentage_calculation($q53_individual_coverage_men,$gtotal_people),   
              'q53_individual_coverage_women'=>$q53_individual_coverage_women, 
              'women_perchantege'=> helper::percentage_calculation($q53_individual_coverage_women,$gtotal_people), 
              'q53_individual_coverage_third_gender'=> $q53_individual_coverage_third_gender, 
              'thirdg_perchantege'=>helper::percentage_calculation($q53_individual_coverage_third_gender,$gtotal_people),
              'total_third_gender'=> $q53_individual_coverage_third_gender, 
              'percentage_third_gender'=>helper::percentage_calculation($q53_individual_coverage_third_gender,$gtotal_people),
              'q53_individual_coverage_boy' => $q53_individual_coverage_boy,
              'boys_perchantege'=>helper::percentage_calculation($q53_individual_coverage_boy,$gtotal_people),
              'q53_individual_coverage_girl' => $q53_individual_coverage_girl,
              'girls_perchantege'=>helper::percentage_calculation($q53_individual_coverage_girl,$gtotal_people),
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
              .'<td id="number_of_case" class="blank-cell row_cell">'.$row['number_of_case'].'</td>'
              .'<td id="q53_individual_coverage_men" class="blank-cell row_cell">'.$row['q53_individual_coverage_men'].'</td>'
              .'<td id="men_perchantege" class="blank-cell row_cell">'.$row['men_perchantege'].'</td>'   
              .'<td id="q53_individual_coverage_women" class="blank-cell row_cell">'.$row['q53_individual_coverage_women'].'</td>'
              .'<td id="women_perchantege" class="blank-cell row_cell">'.$row['women_perchantege'].'</td>'
              .'<td id="q53_individual_coverage_third_gender" class="blank-cell row_cell">'.$row['q53_individual_coverage_third_gender'].'</td>'
              .'<td id="thirdg_perchantege" class="blank-cell row_cell">'.$row['thirdg_perchantege'].'</td>'
              .'<td id="total_adult_by_category" class="blank-cell row_cell">'.$row['total_adult_by_category'].'</td>'
              .'<td id="total_adult_perchantage" class="blank-cell row_cell">'.$row['total_adult_perchantage'].'</td>'
              .'<td id="q53_individual_coverage_boy" class="blank-cell row_cell">'.$row['q53_individual_coverage_boy'].'</td>'
              .'<td id="boys_perchantege" class="blank-cell row_cell">'.$row['boys_perchantege'].'</td>'
              .'<td id="q53_individual_coverage_girl" class="blank-cell row_cell">'.$row['q53_individual_coverage_girl'].'</td>'
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


    public function adult53 () {
        $awarness_data =$this->getting_awarness_data();
        $rows=$this->htmlRows($awarness_data);
       return response()->json([
           'status' => 'success', 
           'data' =>[
               'q53_category_data' =>$rows,
             ],
         ], 200);
        exit();
       }
   
       public function participants53()
       {
           $awarness_data =$this->getting_awarness_data(true);
         $rows=$this->htmlRows($awarness_data);
           return response()->json([
               'status' => 'success', 
               'data' =>[
                   'q53_category_data' =>$rows,
                 ],
             ], 200);
           exit();
       }

       public function q53_generate_pdf()
        {
          
          $awarness_data_table1 =$this->getting_awarness_data();
          $awarness_data_table2 =$this->getting_awarness_data(true);
          $table1_rows=$this->htmlRows($awarness_data_table1);
          $table2_rows=$this->htmlRows($awarness_data_table2);
          // $category_pie_chart_data=$this->awarness_all_partcipants();
          $pdf=PDF::loadView('superadmin.case.q53_table_chart',compact('table1_rows','table2_rows')); // test using image for ''data''
          $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif','isJavascriptEnabled'=>true]);
          // $pdf->setOption('enable-javascript', true);
          // $pdf->setOption('javascript-delay', 5000);
          // $pdf->setOption('enable-smart-shrinking', true);
          // $pdf->setOption('no-stop-slow-scripts', true);
          return $pdf->stream('q53_chart.pdf');
        }

}
