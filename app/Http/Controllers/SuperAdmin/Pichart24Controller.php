<?php

namespace App\Http\Controllers\SuperAdmin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Helpers\helper;
use Illuminate\Http\Request;
use App\Models\TwentyFour;
use App\Models\User;
use PDF;

global $q24_title_origin_guidelines;
global $q24_description_change_status;
$q24_title_origin_guidelines=array('1'=>'Referral desk established at women and
Child Repression Prevention Tribunals,
Anti-Trafficking Tribunals, and District tribunals', '2'=>'National Referral Mechanism Guideline', 
'3'=>'National Referral Mechanism SOP','4'=>'Digital Referral Mechanism of MoHA'); 
$q24_description_change_status=array('1'=>'Enforced', '2'=>'Updated and enforced', 
'3'=>'Stricter enforcement','4'=>'Increased efforts','5'=>'Moderate Effortt','6'=>'Less Effort','7'=>'Poor Enforcement','8'=>'Under Review','9'=>'Other (Specify)'); 
class Pichart24Controller extends Controller
{

   



      public static function getting_awarness_data ($participant=false){
        global $q24_title_origin_guidelines;
        global $q24_description_change_status;
        $awarness_data =TwentyFour::government_train_diplomats_q24_query_data();
        $men_q24 =0;
        $women_q24 =0;
        $third_gender_q24 =0;
        $total_adult=0;
        $total_children=0;
        $boy_q24 =0;
        $girl_q24 =0;
        $total_perticipant=0;
        $awarness_category_data=[];
        if($participant){ 
          foreach ($awarness_data as $row) {
            $total_adult_by_category=$row->men_q24+$row->women_q24+$row->third_gender_q24;
            $total_children_by_category=$row->boy_q24+$row->girl_q24;
            $total_people= $total_adult_by_category+$total_children_by_category;
            $total_perticipant += $total_people;
          }
      }
      $gtotal_people=0;
        foreach ($awarness_data as $row) {
            $category=[];
            $men_q24+=$row->men_q24;
            $women_q24+=$row->women_q24;
            $third_gender_q24+=$row->third_gender_q24;
            $boy_q24+=$row->boy_q24;
            $girl_q24+=$row->girl_q24;         
            $total_adult_by_category=$row->men_q24+$row->women_q24+$row->third_gender_q24;
            $total_adult +=$total_adult_by_category;
            $total_children_by_category=$row->boy_q24+$row->girl_q24;
            $total_children +=$total_children_by_category;
            $total_people= $total_adult_by_category+$total_children_by_category;
            $gtotal_people += $total_people;
            $men_perchantege=helper::percentage_calculation($row->men_q24, $participant ? $total_perticipant : $total_people);
            $women_perchantege=helper::percentage_calculation($row->women_q24,$participant ? $total_perticipant :$total_people);
            $thirdg_perchantege=helper::percentage_calculation($row->third_gender_q24,$participant ? $total_perticipant : $total_people);
            $boys_perchantege=helper::percentage_calculation($row->boy_q24,$participant ? $total_perticipant : $total_people);
            $girls_perchantege=helper::percentage_calculation($row->girl_q24,$participant ? $total_perticipant : $total_people);
            $children_perchnatage=helper::percentage_calculation($total_children_by_category,$participant ? $total_perticipant : $total_people);
            $total_adult_perchantage=helper::percentage_calculation($total_adult_by_category,$participant ? $total_perticipant : $total_people);
            $percentage_of_total_population=helper::percentage_calculation($total_people,$participant ? $total_perticipant : $total_people);
            $category=array(
              'q24_title_origin_guidelines'=>helper::arraykeys_to_value($q24_title_origin_guidelines,$row->q24_title_origin_guidelines),
              'q24_description_change_status'=>helper::arraykeys_to_value($q24_description_change_status,$row->q24_description_change_status),
              'men_q24'=> $row->men_q24, 
              'men_perchantege'=> $men_perchantege,   
              'women_q24'=> $row->women_q24, 
              'women_perchantege'=> $women_perchantege, 
              'third_gender_q24'=> $row->third_gender_q24, 
              'thirdg_perchantege'=>$thirdg_perchantege,
              'third_gender_q24'=> $third_gender_q24, 
              'percentage_third_gender'=>$thirdg_perchantege,
              'boy_q24' => $row->boy_q24,
              'boys_perchantege'=>$boys_perchantege,
              'girl_q24' => $row->girl_q24,
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
              'q24_title_origin_guidelines'=>'Total',
              'q24_description_change_status'=>'',
              'men_q24'=> $men_q24, 
              'men_perchantege'=> helper::percentage_calculation($men_q24,$gtotal_people),   
              'women_q24'=>$women_q24, 
              'women_perchantege'=> helper::percentage_calculation($women_q24,$gtotal_people), 
              'third_gender_q24'=> $third_gender_q24, 
              'thirdg_perchantege'=>helper::percentage_calculation($third_gender_q24,$gtotal_people),
              'total_third_gender'=> $third_gender_q24, 
              'percentage_third_gender'=>helper::percentage_calculation($third_gender_q24,$gtotal_people),
              'boy_q24' => $boy_q24,
              'boys_perchantege'=>helper::percentage_calculation($boy_q24,$gtotal_people),
              'girl_q24' => $girl_q24,
              'girls_perchantege'=>helper::percentage_calculation($girl_q24,$gtotal_people),
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
              .'<td id="q24_title_origin_guidelines" class="blank-cell row_cell">'.$row['q24_title_origin_guidelines'].'</td>'
              .'<td id="q24_description_change_status" class="blank-cell row_cell">'.$row['q24_description_change_status'].'</td>'
              .'<td id="men_q24" class="blank-cell row_cell">'.$row['men_q24'].'</td>'
              .'<td id="men_perchantege" class="blank-cell row_cell">'.$row['men_perchantege'].'</td>'   
              .'<td id="women_q24" class="blank-cell row_cell">'.$row['women_q24'].'</td>'
              .'<td id="women_perchantege" class="blank-cell row_cell">'.$row['women_perchantege'].'</td>'
              .'<td id="third_gender_q24" class="blank-cell row_cell">'.$row['third_gender_q24'].'</td>'
              .'<td id="thirdg_perchantege" class="blank-cell row_cell">'.$row['thirdg_perchantege'].'</td>'
              .'<td id="total_adult_by_category" class="blank-cell row_cell">'.$row['total_adult_by_category'].'</td>'
              .'<td id="total_adult_perchantage" class="blank-cell row_cell">'.$row['total_adult_perchantage'].'</td>'
              .'<td id="boy_q24" class="blank-cell row_cell">'.$row['boy_q24'].'</td>'
              .'<td id="boys_perchantege" class="blank-cell row_cell">'.$row['boys_perchantege'].'</td>'
              .'<td id="girl_q24" class="blank-cell row_cell">'.$row['girl_q24'].'</td>'
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
  

    public function pichart24()
    {
        $awarness_data =$this->getting_awarness_data();
        $rows=$this->htmlRows($awarness_data);
       return response()->json([
           'status' => 'success', 
           'data' =>[
               'q24_category_data' =>$rows,
             ],
         ], 200);
        exit();
       

    }

    public function pichartadult()
    {
        $awarness_data =$this->getting_awarness_data(true);
        $rows=$this->htmlRows($awarness_data);
          return response()->json([
              'status' => 'success', 
              'data' =>[
                  'q24_category_data' =>$rows,
                ],
            ], 200);
          exit();
       
    
    }


    public function shakir24()
    {

       
        
        
       

    

        
    }

    public function reffered_all_actor()
    {

        
    }
    public function q24_generate_pdf()
    {
      
      $awarness_data_table1 =$this->getting_awarness_data();
      $awarness_data_table2 =$this->getting_awarness_data(true);
      $table1_rows=$this->htmlRows($awarness_data_table1);
      $table2_rows=$this->htmlRows($awarness_data_table2);
      // $category_pie_chart_data=$this->awarness_all_partcipants();
      $pdf=PDF::loadView('superadmin.case.q24_table_chart',compact('table1_rows','table2_rows')); // test using image for ''data''
      $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif','isJavascriptEnabled'=>true]);
      // $pdf->setOption('enable-javascript', true);
      // $pdf->setOption('javascript-delay', 5000);
      // $pdf->setOption('enable-smart-shrinking', true);
      // $pdf->setOption('no-stop-slow-scripts', true);
      return $pdf->stream('q24_chart.pdf');
    }

    public function pichartone ()

    {
      echo"Done";
    }
    

  
}
