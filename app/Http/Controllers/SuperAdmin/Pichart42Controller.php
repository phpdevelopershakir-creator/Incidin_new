<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\helper;
use App\Models\FourtyTwo;
use DB;
use PDF;
global $q42_type;
global $q42_sexual_exploitation_division_id;

$q42_type=array('1'=>'Sexual exploitation', 
'2'=>'labour Trafficking', '3'=>'International Trafficking');
$q42_sexual_exploitation_division_id=array('1'=>'Barisal', 
'2'=>'Chattogram', '3'=>'Dhaka','4'=>'Khulna'
,'5'=>'Mymensingh','6'=>'Rajshahi','7'=>'Rangpur','8'=>'Sylhet');
class Pichart42Controller extends Controller
{


      public static function getting_government_data ($participant=false){
        global $q42_type;
        global $q42_sexual_exploitation_division_id;
        $government_data =FourtyTwo::government_train_diplomats_q42_query_data();
        $q42_sexual_men =0;
        $q42_sexual_women =0;
        $q42_sexual_third_gender =0;
        $total_adult=0;
      
        $total_perticipant=0;
        $government_category_data=[];
        if($participant){ 
          foreach ($government_data as $row) {
            $total_adult_by_category=$row->q42_sexual_men+$row->q42_sexual_women+$row->q42_sexual_third_gender;
          

            $total_people= $total_adult_by_category;
            $total_perticipant += $total_people;
          }
      }
      $gtotal_people=0;
        foreach ($government_data as $row) {
            $category=[];
            $q42_sexual_men+=$row->q42_sexual_men;
            $q42_sexual_women+=$row->q42_sexual_women;
            $q42_sexual_third_gender+=$row->q42_sexual_third_gender;         
            $total_adult_by_category=$row->q42_sexual_men+$row->q42_sexual_women+$row->q42_sexual_third_gender;
            $total_adult +=$total_adult_by_category;
            $total_people= $total_adult_by_category;
            $gtotal_people += $total_people;
            
            $men_perchantege=helper::percentage_calculation($row->q42_sexual_men, $participant ? $total_perticipant : $total_people);
            $women_perchantege=helper::percentage_calculation($row->q42_sexual_women,$participant ? $total_perticipant :$total_people);
            $thirdg_perchantege=helper::percentage_calculation($row->q42_sexual_third_gender,$participant ? $total_perticipant : $total_people);


            $total_adult_perchantage=helper::percentage_calculation($total_adult_by_category,$participant ? $total_perticipant : $total_people);
            $percentage_of_total_population=helper::percentage_calculation($total_people,$participant ? $total_perticipant : $total_people);
            $category=array(
              'q42_type'=>helper::arraykeys_to_value($q42_type,$row->q42_type),
              'q42_sexual_exploitation_division_id'=>helper::arraykeys_to_value($q42_sexual_exploitation_division_id,$row->q42_sexual_exploitation_division_id),
              'q42_sexual_men'=> $row->q42_sexual_men, 
              'men_perchantege'=> $men_perchantege,   
              'q42_sexual_women'=> $row->q42_sexual_women, 
              'women_perchantege'=> $women_perchantege, 
              'q42_sexual_third_gender'=> $row->q42_sexual_third_gender, 
              'thirdg_perchantege'=>$thirdg_perchantege,
              'total_third_gender'=> $q42_sexual_third_gender, 
              'percentage_third_gender'=>$thirdg_perchantege,
              'total_adult_by_category'=>$total_adult_by_category,
              'total_adult_perchantage'=>$total_adult_perchantage,
              'percentage_of_total_population'=>$percentage_of_total_population,
            );
            array_push($government_category_data,$category);         
        }
        if(count($government_category_data)>0){
            $total_category=array(
              'q42_type'=>'Total',
              'q42_sexual_exploitation_division_id'=>'',
              'q49_location_id'=>'',
              'q42_sexual_men'=> $q42_sexual_men, 
              'men_perchantege'=> helper::percentage_calculation($q42_sexual_men,$gtotal_people),   
              'q42_sexual_women'=>$q42_sexual_women, 
              'women_perchantege'=> helper::percentage_calculation($q42_sexual_women,$gtotal_people), 
              'q42_sexual_third_gender'=> $q42_sexual_third_gender, 
              'thirdg_perchantege'=>helper::percentage_calculation($q42_sexual_third_gender,$gtotal_people),
              'total_third_gender'=> $q42_sexual_third_gender, 
              'percentage_third_gender'=>helper::percentage_calculation($q42_sexual_third_gender,$gtotal_people),
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
              .'<td scope="col" id="q42_type" class="blank-cell row_cell">'.$row['q42_type'].'</td>'
              .'<td scope="col" id="q42_sexual_exploitation_division_id" class="blank-cell row_cell">'.$row['q42_sexual_exploitation_division_id'].'</td>'
              .'<td id="q42_sexual_men" class="blank-cell row_cell">'.$row['q42_sexual_men'].'</td>'
              .'<td id="men_perchantege" class="blank-cell row_cell">'.$row['men_perchantege'].'</td>'   
              .'<td id="q42_sexual_women" class="blank-cell row_cell">'.$row['q42_sexual_women'].'</td>'
              .'<td id="women_perchantege" class="blank-cell row_cell">'.$row['women_perchantege'].'</td>'
              .'<td id="q42_sexual_third_gender" class="blank-cell row_cell">'.$row['q42_sexual_third_gender'].'</td>'
              .'<td id="thirdg_perchantege" class="blank-cell row_cell">'.$row['thirdg_perchantege'].'</td>'
              .'<td id="total_adult_by_category" class="blank-cell row_cell">'.$row['total_adult_by_category'].'</td>'
              .'<td id="total_adult_perchantage" class="blank-cell row_cell">'.$row['total_adult_perchantage'].'</td>'
           
              .'</tr>';
            $rows .=$row;
            }
        } 
        return $rows;
    }

    public function adult42()
    {
        $government_data =$this->getting_government_data();
        $cat_name="Test";
        $rows=$this->htmlRows($government_data);
       return response()->json([
           'status' => 'success', 
           'data' =>[
               'q42_category_data' =>$rows,
             ],
         ], 200);
        exit();
     
    }

    public function participants42()
    {
        $government_data =$this->getting_government_data(true);
      $rows=$this->htmlRows($government_data);
        return response()->json([
            'status' => 'success', 
            'data' =>[
                'q42_category_data' =>$rows,
              ],
          ], 200);
        exit();
    }
    public function q42_generate_pdf()
    {
      
      $awarness_data_table1 =$this->getting_government_data();
      $awarness_data_table2 =$this->getting_government_data(true);
      $table1_rows=$this->htmlRows($awarness_data_table1);
      $table2_rows=$this->htmlRows($awarness_data_table2);
      // $category_pie_chart_data=$this->awarness_all_partcipants();
      $pdf=PDF::loadView('superadmin.case.q42_table_chart',compact('table1_rows','table2_rows')); // test using image for ''data''
      $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif','isJavascriptEnabled'=>true]);
      // $pdf->setOption('enable-javascript', true);
      // $pdf->setOption('javascript-delay', 5000);
      // $pdf->setOption('enable-smart-shrinking', true);
      // $pdf->setOption('no-stop-slow-scripts', true);
      return $pdf->stream('q42_chart.pdf');
    }
}
