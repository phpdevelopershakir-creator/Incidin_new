<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\helper;
use App\Models\ThirtyOne;
use DB;
use PDF;
global $q31_type;
global $q31_implementer_traffick;

$q31_type=array('1'=>'Internal Trafficking', '2'=>'International Trafficking'); 
$q31_implementer_traffick=array('1'=>'MoWCA', '2'=>'MoHA','3'=>'MoSW ',
'4'=>'MoEWOE ','5'=>'MoLJPA ','6'=>'INCIDIN Bangladesh ','7'=>'Ask','8'=>'BNWLA','9'=>'DAM'); 

class Pichart31Controller extends Controller
{
  

      public static function getting_awarness_data ($participant=false){
        global $q31_type;
        global $q31_implementer_traffick;

      
        $awarness_data =ThirtyOne::awarness_activities_q31_query_data();
        $q31_traffick_men =0;
        $q31_traffick_women =0;
        $q31_traffick_third_gender =0;
        $total_adult=0;
        $total_children=0;
        $q31_traffick_boys =0;
        $q31_traffick_girls =0;
        $total_perticipant=0;
        $q31_traffick_type_of_hotlines =0;
        $awarness_category_data=[];
        if($participant){ 
          foreach ($awarness_data as $row) {
            $total_adult_by_category=$row->q31_traffick_men+$row->q31_traffick_women+$row->q31_traffick_third_gender;
            $total_children_by_category=$row->q31_traffick_boys+$row->q31_traffick_girls;
            $total_people= $total_adult_by_category+$total_children_by_category;
            $total_perticipant += $total_people;
          }
      }
      $gtotal_people=0;
        foreach ($awarness_data as $row) {
            $category=[];
            $q31_traffick_type_of_hotlines=$row->q31_traffick_type_of_hotlines;
            $q31_traffick_men+=$row->q31_traffick_men;
            $q31_traffick_women+=$row->q31_traffick_women;
            $q31_traffick_third_gender+=$row->q31_traffick_third_gender;
            $q31_traffick_boys+=$row->q31_traffick_boys;
            $q31_traffick_girls+=$row->q31_traffick_girls;         
            $total_adult_by_category=$row->q31_traffick_men+$row->q31_traffick_women+$row->q31_traffick_third_gender;
            $total_adult +=$total_adult_by_category;
            $total_children_by_category=$row->q31_traffick_boys+$row->q31_traffick_girls;
            $total_children +=$total_children_by_category;
            $total_people= $total_adult_by_category+$total_children_by_category;
            $gtotal_people += $total_people;
            $men_perchantege=helper::percentage_calculation($row->q31_traffick_men, $participant ? $total_perticipant : $total_people);
            $women_perchantege=helper::percentage_calculation($row->q31_traffick_women,$participant ? $total_perticipant :$total_people);
            $thirdg_perchantege=helper::percentage_calculation($row->q31_traffick_third_gender,$participant ? $total_perticipant : $total_people);
            $boys_perchantege=helper::percentage_calculation($row->q31_traffick_boys,$participant ? $total_perticipant : $total_people);
            $girls_perchantege=helper::percentage_calculation($row->q31_traffick_girls,$participant ? $total_perticipant : $total_people);
            $children_perchnatage=helper::percentage_calculation($total_children_by_category,$participant ? $total_perticipant : $total_people);
            $total_adult_perchantage=helper::percentage_calculation($total_adult_by_category,$participant ? $total_perticipant : $total_people);
            $percentage_of_total_population=helper::percentage_calculation($total_people,$participant ? $total_perticipant : $total_people);
          //  print_r($row->q31_traffick_type_of_hotlines);
          //  exit();
            $category=array(
              'q31_type'=>helper::arraykeys_to_value($q31_type,$row->q31_type),
              'q31_implementer_traffick'=>helper::arraykeys_to_value($q31_implementer_traffick,$row->q31_implementer_traffick),
              'q31_traffick_type_of_hotlines'=> $row->q31_traffick_type_of_hotlines, 
              'q31_traffick_men'=> $row->q31_traffick_men, 
              'men_perchantege'=> $men_perchantege,   
              'q31_traffick_women'=> $row->q31_traffick_women, 
              'women_perchantege'=> $women_perchantege, 
              'q31_traffick_third_gender'=> $row->q31_traffick_third_gender, 
              'thirdg_perchantege'=>$thirdg_perchantege,
              'total_third_gender'=> $q31_traffick_third_gender, 
              'percentage_third_gender'=>$thirdg_perchantege,
              'q31_traffick_boys' => $row->q31_traffick_boys,
              'boys_perchantege'=>$boys_perchantege,
              'q31_traffick_girls' => $row->q31_traffick_girls,
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
              'q31_type'=>'Total',
              'q31_implementer_traffick'=>'',
              'q31_traffick_type_of_hotlines'=> $q31_traffick_type_of_hotlines, 
              'q31_traffick_men'=> $q31_traffick_men, 
              'men_perchantege'=> helper::percentage_calculation($q31_traffick_men,$gtotal_people),   
              'q31_traffick_women'=>$q31_traffick_women, 
              'women_perchantege'=> helper::percentage_calculation($q31_traffick_women,$gtotal_people), 
              'q31_traffick_third_gender'=> $q31_traffick_third_gender, 
              'thirdg_perchantege'=>helper::percentage_calculation($q31_traffick_third_gender,$gtotal_people),
              'total_third_gender'=> $q31_traffick_third_gender, 
              'percentage_third_gender'=>helper::percentage_calculation($q31_traffick_third_gender,$gtotal_people),
              'q31_traffick_boys' => $q31_traffick_boys,
              'boys_perchantege'=>helper::percentage_calculation($q31_traffick_boys,$gtotal_people),
              'q31_traffick_girls' => $q31_traffick_girls,
              'girls_perchantege'=>helper::percentage_calculation($q31_traffick_girls,$gtotal_people),
              'total_children_by_category' => $total_children,
              'children_perchnatage'=>helper::percentage_calculation($total_children,$gtotal_people),
              'total_adult_by_category'=>$total_adult,
              'total_people'=>$gtotal_people,
              'total_adult_perchantage'=>helper::percentage_calculation($total_adult,$gtotal_people),
              'percentage_of_total_population'=> $participant ? helper::percentage_calculation($gtotal_people,$gtotal_people) : $percentage_of_total_population,
              'q31_traffick_type_of_hotlines' => $row->q31_traffick_type_of_hotlines,
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
              .'<td id="q31_type" class="blank-cell row_cell">'.$row['q31_type'].'</td>'
              .'<td id="q31_implementer_traffick" class="blank-cell row_cell">'.$row['q31_implementer_traffick'].'</td>'
              .'<td id="q31_traffick_type_of_hotlines" class="blank-cell row_cell">'.$row['q31_traffick_type_of_hotlines'].'</td>'
              .'<td id="q31_traffick_men" class="blank-cell row_cell">'.$row['q31_traffick_men'].'</td>'
              .'<td id="men_perchantege" class="blank-cell row_cell">'.$row['men_perchantege'].'</td>'   
              .'<td id="q31_traffick_women" class="blank-cell row_cell">'.$row['q31_traffick_women'].'</td>'
              .'<td id="women_perchantege" class="blank-cell row_cell">'.$row['women_perchantege'].'</td>'
              .'<td id="q31_traffick_third_gender" class="blank-cell row_cell">'.$row['q31_traffick_third_gender'].'</td>'
              .'<td id="thirdg_perchantege" class="blank-cell row_cell">'.$row['thirdg_perchantege'].'</td>'
              .'<td id="total_adult_by_category" class="blank-cell row_cell">'.$row['total_adult_by_category'].'</td>'
              .'<td id="total_adult_perchantage" class="blank-cell row_cell">'.$row['total_adult_perchantage'].'</td>'
              .'<td id="q31_traffick_boys" class="blank-cell row_cell">'.$row['q31_traffick_boys'].'</td>'
              .'<td id="boys_perchantege" class="blank-cell row_cell">'.$row['boys_perchantege'].'</td>'
              .'<td id="q31_traffick_girls" class="blank-cell row_cell">'.$row['q31_traffick_girls'].'</td>'
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
    public function adult31()
    {
        $awarness_data =$this->getting_awarness_data();
     $rows=$this->htmlRows($awarness_data);
    return response()->json([
        'status' => 'success', 
        'data' =>[
            'q31_category_data' =>$rows,
          ],
      ], 200);
     exit();
    
    }

    public function participants31()
    {
        $awarness_data =$this->getting_awarness_data(true);
      $rows=$this->htmlRows($awarness_data);
        return response()->json([
            'status' => 'success', 
            'data' =>[
                'q31_category_data' =>$rows,
              ],
          ], 200);
        exit();
    }

    public function q31_generate_pdf()
    {
      
      $awarness_data_table1 =$this->getting_awarness_data();
      $awarness_data_table2 =$this->getting_awarness_data(true);
      $table1_rows=$this->htmlRows($awarness_data_table1);
      $table2_rows=$this->htmlRows($awarness_data_table2);
      // $category_pie_chart_data=$this->awarness_all_partcipants();
      $pdf=PDF::loadView('superadmin.case.q31_table_chart',compact('table1_rows','table2_rows')); // test using image for ''data''
      $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif','isJavascriptEnabled'=>true]);
      // $pdf->setOption('enable-javascript', true);
      // $pdf->setOption('javascript-delay', 5000);
      // $pdf->setOption('enable-smart-shrinking', true);
      // $pdf->setOption('no-stop-slow-scripts', true);
      return $pdf->stream('q31_chart.pdf');
    }

}
