<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\helper;
use App\Models\FortyNine;
use DB;
use PDF;
global $q49_category_trainee;
global $q49_training_contents;
global $q49_location_id;
$q49_category_trainee=array('1'=>'Judges of Separate Special TIP Tribunal', 
'2'=>'Judges of Special TIP Tribunal', '3'=>'PP of Separate Special TIP Tribunal','4'=>'PP of Special TIP Tribunal'
,'5'=>'Judges','6'=>'PP','7'=>'PP','8'=>'Court Officials');

$q49_training_contents=array('1'=>'PSHT', 
'2'=>'PSHT Act 2012', '3'=>'Rule of PSHT Act','4'=>'TIP Investigation'
,'5'=>'Victim Withess Protection','6'=>'TIP and MLA','7'=>'Role of Police','8'=>'NPA','9'=>'NRM','10'=>'VoT identification Guideline');
$q49_location_id=array('1'=>'Barisal', 
'2'=>'Chattogram', '3'=>'Dhaka','4'=>'Khulna'
,'5'=>'Mymensingh','6'=>'Rajshahi','7'=>'Rangpur','8'=>'Sylhet');
class Pichart49Controller extends Controller
{

      public static function getting_government_data ($participant=false){
        global $q49_category_trainee;
        global $q49_training_contents;
        global $q49_location_id;
        $government_data =FortyNine::government_train_diplomats_q49_query_data();
        $q49_coverage_men =0;
        $q49_coverage_women =0;
        $q49_coverage_third_gender =0;
        $total_adult=0;
      
        $total_perticipant=0;
        $government_category_data=[];
        if($participant){ 
          foreach ($government_data as $row) {
            $total_adult_by_category=$row->q49_coverage_men+$row->q49_coverage_women+$row->q49_coverage_third_gender;
          

            $total_people= $total_adult_by_category;
            $total_perticipant += $total_people;
          }
      }
      $gtotal_people=0;
        foreach ($government_data as $row) {
            $category=[];
            $q49_coverage_men+=$row->q49_coverage_men;
            $q49_coverage_women+=$row->q49_coverage_women;
            $q49_coverage_third_gender+=$row->q49_coverage_third_gender;         
            $total_adult_by_category=$row->q49_coverage_men+$row->q49_coverage_women+$row->q49_coverage_third_gender;
            $total_adult +=$total_adult_by_category;
            $total_people= $total_adult_by_category;
            $gtotal_people += $total_people;
            
            $men_perchantege=helper::percentage_calculation($row->q49_coverage_men, $participant ? $total_perticipant : $total_people);
            $women_perchantege=helper::percentage_calculation($row->q49_coverage_women,$participant ? $total_perticipant :$total_people);
            $thirdg_perchantege=helper::percentage_calculation($row->q49_coverage_third_gender,$participant ? $total_perticipant : $total_people);


            $total_adult_perchantage=helper::percentage_calculation($total_adult_by_category,$participant ? $total_perticipant : $total_people);
            $percentage_of_total_population=helper::percentage_calculation($total_people,$participant ? $total_perticipant : $total_people);
            $category=array(
              'q49_category_trainee'=>helper::arraykeys_to_value($q49_category_trainee,$row->q49_category_trainee),
              'q49_training_contents'=>helper::arraykeys_to_value($q49_training_contents,$row->q49_training_contents),
              'q49_location_id'=>helper::arraykeys_to_value($q49_location_id,$row->q49_location_id),
              'q49_coverage_men'=> $row->q49_coverage_men, 
              'men_perchantege'=> $men_perchantege,   
              'q49_coverage_women'=> $row->q49_coverage_women, 
              'women_perchantege'=> $women_perchantege, 
              'q49_coverage_third_gender'=> $row->q49_coverage_third_gender, 
              'thirdg_perchantege'=>$thirdg_perchantege,
              'total_third_gender'=> $q49_coverage_third_gender, 
              'percentage_third_gender'=>$thirdg_perchantege,
              
    
              'total_adult_by_category'=>$total_adult_by_category,
         
              'total_adult_perchantage'=>$total_adult_perchantage,
              'percentage_of_total_population'=>$percentage_of_total_population,
            );
            array_push($government_category_data,$category);         
        }
        if(count($government_category_data)>0){
            $total_category=array(
              'q49_category_trainee'=>'Total',
              'q49_training_contents'=>'',
              'q49_location_id'=>'',
              'q49_coverage_men'=> $q49_coverage_men, 
              'men_perchantege'=> helper::percentage_calculation($q49_coverage_men,$gtotal_people),   
              'q49_coverage_women'=>$q49_coverage_women, 
              'women_perchantege'=> helper::percentage_calculation($q49_coverage_women,$gtotal_people), 
              'q49_coverage_third_gender'=> $q49_coverage_third_gender, 
              'thirdg_perchantege'=>helper::percentage_calculation($q49_coverage_third_gender,$gtotal_people),
              'total_third_gender'=> $q49_coverage_third_gender, 
              'percentage_third_gender'=>helper::percentage_calculation($q49_coverage_third_gender,$gtotal_people),
              'total_adult_by_category'=>$total_adult,
              'total_people'=>$gtotal_people,
              'total_adult_perchantage'=>helper::percentage_calculation($total_adult,$gtotal_people),
              'percentage_of_total_population'=> $participant ? helper::percentage_calculation($gtotal_people,$gtotal_people) : $percentage_of_total_population,
            );
            array_push($government_category_data,$total_category); 
        }     
        return $government_category_data;
    }

    public function htmlRows ($data_array) {
        $rows="";
        if(isset( $data_array) && !empty( $data_array)){
            foreach($data_array as $row){
              $row ='<tr>'
              .'<td scope="col" id="q49_category_trainee" class="blank-cell row_cell">'.$row['q49_category_trainee'].'</td>'
              .'<td scope="col" id="q49_training_contents" class="blank-cell row_cell">'.$row['q49_training_contents'].'</td>'
              .'<td scope="col" id="q49_location_id" class="blank-cell row_cell">'.$row['q49_location_id'].'</td>'
              .'<td id="q49_coverage_men" class="blank-cell row_cell">'.$row['q49_coverage_men'].'</td>'
              .'<td id="men_perchantege" class="blank-cell row_cell">'.$row['men_perchantege'].'</td>'   
              .'<td id="q49_coverage_women" class="blank-cell row_cell">'.$row['q49_coverage_women'].'</td>'
              .'<td id="women_perchantege" class="blank-cell row_cell">'.$row['women_perchantege'].'</td>'
              .'<td id="q49_coverage_third_gender" class="blank-cell row_cell">'.$row['q49_coverage_third_gender'].'</td>'
              .'<td id="thirdg_perchantege" class="blank-cell row_cell">'.$row['thirdg_perchantege'].'</td>'
              .'<td id="total_adult_by_category" class="blank-cell row_cell">'.$row['total_adult_by_category'].'</td>'
              .'<td id="total_adult_perchantage" class="blank-cell row_cell">'.$row['total_adult_perchantage'].'</td>'
           
              .'</tr>';
            $rows .=$row;
            }
        } 
        return $rows;
    }
  

    public function adult49()
    {
        $government_data =$this->getting_government_data();
        $cat_name="Test";
        $rows=$this->htmlRows($government_data);
       return response()->json([
           'status' => 'success', 
           'data' =>[
               'q49_category_data' =>$rows,
             ],
         ], 200);
        exit();
     
    }

    public function participants49()
    {
        $government_data =$this->getting_government_data(true);
      $rows=$this->htmlRows($government_data);
        return response()->json([
            'status' => 'success', 
            'data' =>[
                'q49_category_data' =>$rows,
              ],
          ], 200);
        exit();
    }
    public function q49_generate_pdf()
    {
      
      $awarness_data_table1 =$this->getting_government_data();
      $awarness_data_table2 =$this->getting_government_data(true);
      $table1_rows=$this->htmlRows($awarness_data_table1);
      $table2_rows=$this->htmlRows($awarness_data_table2);
      // $category_pie_chart_data=$this->awarness_all_partcipants();
      $pdf=PDF::loadView('superadmin.case.q49_table_chart',compact('table1_rows','table2_rows')); // test using image for ''data''
      $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif','isJavascriptEnabled'=>true]);
      // $pdf->setOption('enable-javascript', true);
      // $pdf->setOption('javascript-delay', 5000);
      // $pdf->setOption('enable-smart-shrinking', true);
      // $pdf->setOption('no-stop-slow-scripts', true);
      return $pdf->stream('q49_chart.pdf');
    }

}
