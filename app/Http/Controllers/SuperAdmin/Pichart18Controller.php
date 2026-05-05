<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\helper;
use App\Models\Eighteen;
use PDF;
global $types_categories;
$types_categories=array('1'=>'Diplomats in foreign missions', '2'=>'Labour Attaches', '3'=>'MoFA officials within the country'); 
class Pichart18Controller extends Controller
{

 


    public static function getting_government_data ($participant=false){
        global $types_categories;
        $government_data =Eighteen::government_train_diplomats_q18_query_data();
        $total_type_coverage_training_men =0;
        $total_type_coverage_training_women =0;
        $total_type_coverage_training_thirdg =0;
        $total_adult=0;
      
        $total_perticipant=0;
        $government_category_data=[];
        if($participant){ 
          foreach ($government_data as $row) {
            $total_adult_by_category=$row->coverage_training_men+$row->coverage_training_women+$row->coverage_training_third_gender;
          

            $total_people= $total_adult_by_category;
            $total_perticipant += $total_people;
          }
      }
      $gtotal_people=0;
        foreach ($government_data as $row) {
            $category=[];
            $total_type_coverage_training_men+=$row->coverage_training_men;
            $total_type_coverage_training_women+=$row->coverage_training_women;
            $total_type_coverage_training_thirdg+=$row->coverage_training_third_gender;         
            $total_adult_by_category=$row->coverage_training_men+$row->coverage_training_women+$row->coverage_training_third_gender;
            $total_adult +=$total_adult_by_category;
            $total_people= $total_adult_by_category;
            $gtotal_people += $total_people;
            
            $men_perchantege=helper::percentage_calculation($row->coverage_training_men, $participant ? $total_perticipant : $total_people);
            $women_perchantege=helper::percentage_calculation($row->coverage_training_women,$participant ? $total_perticipant :$total_people);
            $thirdg_perchantege=helper::percentage_calculation($row->coverage_training_third_gender,$participant ? $total_perticipant : $total_people);


            $total_adult_perchantage=helper::percentage_calculation($total_adult_by_category,$participant ? $total_perticipant : $total_people);
            $percentage_of_total_population=helper::percentage_calculation($total_people,$participant ? $total_perticipant : $total_people);
            $category=array(
              'category_trainee_q18'=>helper::arraykeys_to_value($types_categories,$row->category_trainee_q18),
              'coverage_training_men'=> $row->coverage_training_men, 
              'men_perchantege'=> $men_perchantege,   
              'coverage_training_women'=> $row->coverage_training_women, 
              'women_perchantege'=> $women_perchantege, 
              'coverage_training_third_gender'=> $row->coverage_training_third_gender, 
              'thirdg_perchantege'=>$thirdg_perchantege,
              'total_third_gender'=> $total_type_coverage_training_thirdg, 
              'percentage_third_gender'=>$thirdg_perchantege,
              
    
              'total_adult_by_category'=>$total_adult_by_category,
         
              'total_adult_perchantage'=>$total_adult_perchantage,
              'percentage_of_total_population'=>$percentage_of_total_population,
            );
            array_push($government_category_data,$category);         
        }
        if(count($government_category_data)>0){
            $total_category=array(
              'category_trainee_q18'=>'Total',
              'coverage_training_men'=> $total_type_coverage_training_men, 
              'men_perchantege'=> helper::percentage_calculation($total_type_coverage_training_men,$gtotal_people),   
              'coverage_training_men'=>$total_type_coverage_training_women, 
              'women_perchantege'=> helper::percentage_calculation($total_type_coverage_training_women,$gtotal_people), 
              'coverage_training_third_gender'=> $total_type_coverage_training_thirdg, 
              'thirdg_perchantege'=>helper::percentage_calculation($total_type_coverage_training_thirdg,$gtotal_people),
              'total_third_gender'=> $total_type_coverage_training_thirdg, 
              'percentage_third_gender'=>helper::percentage_calculation($total_type_coverage_training_thirdg,$gtotal_people),
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
              .'<td scope="col" id="category_trainee_q18" class="blank-cell row_cell">'.$row['category_trainee_q18'].'</td>'
              .'<td id="coverage_training_men" class="blank-cell row_cell">'.$row['coverage_training_men'].'</td>'
              .'<td id="men_perchantege" class="blank-cell row_cell">'.$row['men_perchantege'].'</td>'   
              .'<td id="coverage_training_men" class="blank-cell row_cell">'.$row['coverage_training_men'].'</td>'
              .'<td id="women_perchantege" class="blank-cell row_cell">'.$row['women_perchantege'].'</td>'
              .'<td id="coverage_training_third_gender" class="blank-cell row_cell">'.$row['coverage_training_third_gender'].'</td>'
              .'<td id="thirdg_perchantege" class="blank-cell row_cell">'.$row['thirdg_perchantege'].'</td>'
              .'<td id="total_adult_by_category" class="blank-cell row_cell">'.$row['total_adult_by_category'].'</td>'
              .'<td id="total_adult_perchantage" class="blank-cell row_cell">'.$row['total_adult_perchantage'].'</td>'
        
            //   .'<td id="total_courtyard_meeting">'.$row['total_people'].'</td>'
            //   .'<td id="totalCourtyuardMetting">'.$row['percentage_of_total_population'].'</td>'     
              .'</tr>';
            $rows .=$row;
            }
        } 
        return $rows;
    }
  


    public function adult18()
    {
        $government_data =$this->getting_government_data();
        $rows=$this->htmlRows($government_data);
       return response()->json([
           'status' => 'success', 
           'data' =>[
               'q18_category_data' =>$rows,
             ],
         ], 200);
        exit();
     
    }

    public function participants()
    {
        $government_data =$this->getting_government_data(true);
      $rows=$this->htmlRows($government_data);
        return response()->json([
            'status' => 'success', 
            'data' =>[
                'q18_category_data' =>$rows,
              ],
          ], 200);
        exit();
    }


    public function q18_generate_pdf()
    {
      
      $awarness_data_table1 =$this->getting_government_data();
      $awarness_data_table2 =$this->getting_government_data(true);
      $table1_rows=$this->htmlRows($awarness_data_table1);
      $table2_rows=$this->htmlRows($awarness_data_table2);
      // $category_pie_chart_data=$this->awarness_all_partcipants();
      $pdf=PDF::loadView('superadmin.case.q18_table_chart',compact('table1_rows','table2_rows')); // test using image for ''data''
      $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif','isJavascriptEnabled'=>true]);
      // $pdf->setOption('enable-javascript', true);
      // $pdf->setOption('javascript-delay', 5000);
      // $pdf->setOption('enable-smart-shrinking', true);
      // $pdf->setOption('no-stop-slow-scripts', true);
      return $pdf->stream('q18_chart.pdf');
    }

   

}
