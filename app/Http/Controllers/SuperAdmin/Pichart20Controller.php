<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\helper;
use App\Models\Twenty;
use DB;
use PDF;

class Pichart20Controller extends Controller
{

   
 

        public static function getting_awarness_data ($participant=false){
 
            $awarness_data =Twenty::awarness_activities_q20_query_data();
            $q20_number_cases_men =0;
            $q20_number_cases_women =0;
            $q20_number_cases_third_gender =0;
            $total_adult=0;
            $total_perticipant=0;
            $awarness_category_data=[];
            if($participant){ 
                    foreach ($awarness_data as $row) {
                    // $total_adult_by_category=$row->q20_number_cases_men+$row->q20_number_cases_women+
                    // $row->q20_number_cases_third_gender;
                    // $total_people= $total_adult_by_category;
                    // $total_perticipant += $total_people;
                    $total_adult_by_category=$row->q20_number_cases_men+$row->q20_number_cases_women+$row->q20_number_cases_third_gender;
          

                    $total_people= $total_adult_by_category;
                    $total_perticipant += $total_people;

                    }
            }
            $gtotal_people=0;
            foreach ($awarness_data as $row) {
                    $category=[];
                    $q20_number_cases_men+=$row->q20_number_cases_men;
                    $q20_number_cases_women+=$row->q20_number_cases_women;
                    $q20_number_cases_third_gender+=$row->q20_number_cases_third_gender;
            
                    $total_adult_by_category=$row->q20_number_cases_men+$row->q20_number_cases_women+$row->q20_number_cases_third_gender;
                    $total_adult +=$total_adult_by_category;
                    $total_people= $total_adult_by_category;
                    $gtotal_people += $total_people;
                    $men_perchantege=helper::percentage_calculation($row->q20_number_cases_men, $participant ? $total_perticipant : $total_people);
                    $women_perchantege=helper::percentage_calculation($row->q20_number_cases_women,$participant ? $total_perticipant :$total_people);
                    $thirdg_perchantege=helper::percentage_calculation($row->q20_number_cases_third_gender,$participant ? $total_perticipant : $total_people);

                    $total_adult_perchantage=helper::percentage_calculation($total_adult_by_category,$participant ? $total_perticipant : $total_people);
                    $percentage_of_total_population=helper::percentage_calculation($total_people,$participant ? $total_perticipant : $total_people);
                    $category=array(
                    'q20_country_id'=>$row->q20_country_id,
                    'q20_description'=>$row->q20_description,
                    'q20_number_cases_men'=> $row->q20_number_cases_men, 
                    'men_perchantege'=> $men_perchantege,   
                    'q20_number_cases_women'=> $row->q20_number_cases_women, 
                    'women_perchantege'=> $women_perchantege, 
                    'q20_number_cases_third_gender'=> $row->q20_number_cases_third_gender, 
                    'thirdg_perchantege'=>$thirdg_perchantege,
                    'q20_number_cases_third_gender'=> $q20_number_cases_third_gender, 
                    'percentage_third_gender'=>$thirdg_perchantege,
                    'total_adult_by_category'=>$total_adult_by_category,
                    'total_people'=>$total_people,
                    'total_adult_perchantage'=>$total_adult_perchantage,
                    'percentage_of_total_population'=>$percentage_of_total_population,
                    );
                    array_push($awarness_category_data,$category);         
            }
            if(count($awarness_category_data)>0){
                    $total_category=array(
                    'q20_country_id'=>'Total',
                    'q20_description'=>'',
                    'q20_number_cases_men'=> $q20_number_cases_men, 
                    'men_perchantege'=> helper::percentage_calculation($q20_number_cases_men,$gtotal_people),   
                    'q20_number_cases_women'=>$q20_number_cases_women, 
                    'women_perchantege'=> helper::percentage_calculation($q20_number_cases_women,$gtotal_people), 
                    'q20_number_cases_third_gender'=> $q20_number_cases_third_gender, 
                    'thirdg_perchantege'=>helper::percentage_calculation($q20_number_cases_third_gender,$gtotal_people),
                    'total_third_gender'=> $q20_number_cases_third_gender, 
                    'percentage_third_gender'=>helper::percentage_calculation($q20_number_cases_third_gender,$gtotal_people),
           
                
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
                      .'<td id="q20_country_id" class="blank-cell row_cell">'.$row['q20_country_id'].'</td>'
                      .'<td id="q20_description" class="blank-cell row_cell">'.$row['q20_description'].'</td>'
                      .'<td id="q20_number_cases_men" class="blank-cell row_cell">'.$row['q20_number_cases_men'].'</td>'
                      .'<td id="men_perchantege" class="blank-cell row_cell">'.$row['men_perchantege'].'</td>'   
                      .'<td id="q20_number_cases_women" class="blank-cell row_cell">'.$row['q20_number_cases_women'].'</td>'
                      .'<td id="women_perchantege" class="blank-cell row_cell">'.$row['women_perchantege'].'</td>'
                      .'<td id="q20_number_cases_third_gender" class="blank-cell row_cell">'.$row['q20_number_cases_third_gender'].'</td>'
                      .'<td id="thirdg_perchantege" class="blank-cell row_cell">'.$row['thirdg_perchantege'].'</td>'
                      .'<td id="total_adult_by_category" class="blank-cell row_cell">'.$row['total_adult_by_category'].'</td>'
                      .'<td id="total_adult_perchantage" class="blank-cell row_cell">'.$row['total_adult_perchantage'].'</td>'
                  
                      .'<td id="total_protect_meeting" class="blank-cell row_cell">'.$row['total_people'].'</td>'
                      .'<td id="totalProtedMetting" class="blank-cell row_cell">'.$row['percentage_of_total_population'].'</td>'     
                      .'</tr>';
                    $rows .=$row;
                    }
                } 
                return $rows;
            }


    public function adult20()
    {

        $awarness_data =$this->getting_awarness_data();
        $cat_name="Test";
        $rows=$this->htmlRows($awarness_data);
       return response()->json([
           'status' => 'success', 
           'data' =>[
               'q20_category_data' =>$rows,
             ],
         ], 200);
        exit();


       

   
    }

    public function participants20()
    {
        $awarness_data =$this->getting_awarness_data(true);
        $rows=$this->htmlRows($awarness_data);
          return response()->json([
              'status' => 'success', 
              'data' =>[
                  'q20_category_data' =>$rows,
                ],
            ], 200);
          exit();
    }

    public function q20_generate_pdf()
    {
      
      $awarness_data_table1 =$this->getting_awarness_data();
      $awarness_data_table2 =$this->getting_awarness_data(true);
      $table1_rows=$this->htmlRows($awarness_data_table1);
      $table2_rows=$this->htmlRows($awarness_data_table2);
      // $category_pie_chart_data=$this->awarness_all_partcipants();
      $pdf=PDF::loadView('superadmin.case.q20_table_chart',compact('table1_rows','table2_rows')); // test using image for ''data''
      $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif','isJavascriptEnabled'=>true]);
      // $pdf->setOption('enable-javascript', true);
      // $pdf->setOption('javascript-delay', 5000);
      // $pdf->setOption('enable-smart-shrinking', true);
      // $pdf->setOption('no-stop-slow-scripts', true);
      return $pdf->stream('q20_chart.pdf');
    }
}
