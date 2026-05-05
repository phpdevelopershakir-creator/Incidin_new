<?php

namespace App\Http\Controllers\SuperAdmin;
use App\Helpers\helper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FiftyFour;
use DB;
use PDF;
class Pichart54Controller extends Controller
{

    public function government_train_diplomats_q54_query_data (){
        //  DB::connection()->enableQueryLog(); 
        $government_train_diplomats_q54_data = DB::table('enforcing_agencies_judiciary_q54')
        ->select(
            DB::raw('SUM(men_q54) as men_q54'),
            DB::raw('SUM(women_q54) as women_q54'),
            DB::raw('SUM(third_gender_q54) as third_gender_q54'),
           'category_trainee_54','number_of_training_54','training_contents_54'
        )
        ->where('category_trainee_54', '>=', 1)
        ->groupBy('category_trainee_54','number_of_training_54','training_contents_54')
        ->get();
        // $queries = DB::getQueryLog();
        return $government_train_diplomats_q54_data ;
      }

      public function getting_government_data ($participant=false){
    
        $government_data =$this->government_train_diplomats_q54_query_data();
        $men_q54 =0;
        $women_q54 =0;
        $third_gender_q54 =0;
        $total_adult=0;
      
        $total_perticipant=0;
        $government_category_data=[];
        if($participant){ 
          foreach ($government_data as $row) {
            $total_adult_by_category=$row->men_q54+$row->women_q54+$row->third_gender_q54;
          

            $total_people= $total_adult_by_category;
            $total_perticipant += $total_people;
          }
      }
      $gtotal_people=0;
        foreach ($government_data as $row) {
            $category=[];
            $men_q54+=$row->men_q54;
            $women_q54+=$row->women_q54;
            $third_gender_q54+=$row->third_gender_q54;         
            $total_adult_by_category=$row->men_q54+$row->women_q54+$row->third_gender_q54;
            $total_adult +=$total_adult_by_category;
            $total_people= $total_adult_by_category;
            $gtotal_people += $total_people;
            
            $men_perchantege=helper::percentage_calculation($row->men_q54, $participant ? $total_perticipant : $total_people);
            $women_perchantege=helper::percentage_calculation($row->women_q54,$participant ? $total_perticipant :$total_people);
            $thirdg_perchantege=helper::percentage_calculation($row->third_gender_q54,$participant ? $total_perticipant : $total_people);


            $total_adult_perchantage=helper::percentage_calculation($total_adult_by_category,$participant ? $total_perticipant : $total_people);
            $percentage_of_total_population=helper::percentage_calculation($total_people,$participant ? $total_perticipant : $total_people);
            $category=array(
              'category_trainee_54'=>$row->category_trainee_54,
              'number_of_training_54'=>$row->number_of_training_54,
              'training_contents_54'=>$row->training_contents_54,
              'men_q54'=> $row->men_q54, 
              'men_perchantege'=> $men_perchantege,   
              'women_q54'=> $row->women_q54, 
              'women_perchantege'=> $women_perchantege, 
              'third_gender_q54'=> $row->third_gender_q54, 
              'thirdg_perchantege'=>$thirdg_perchantege,
              'total_third_gender'=> $third_gender_q54, 
              'percentage_third_gender'=>$thirdg_perchantege,
              'total_adult_by_category'=>$total_adult_by_category,
              'total_adult_perchantage'=>$total_adult_perchantage,
              'percentage_of_total_population'=>$percentage_of_total_population,
            );
            array_push($government_category_data,$category);         
        }
        if(count($government_category_data)>0){
            $total_category=array(
              'category_trainee_54'=>'Total',
              'number_of_training_54'=>'',
              'training_contents_54'=>'',
              'men_q54'=> $men_q54, 
              'men_perchantege'=> helper::percentage_calculation($men_q54,$gtotal_people),   
              'women_q54'=>$women_q54, 
              'women_perchantege'=> helper::percentage_calculation($women_q54,$gtotal_people), 
              'third_gender_q54'=> $third_gender_q54, 
              'thirdg_perchantege'=>helper::percentage_calculation($third_gender_q54,$gtotal_people),
              'total_third_gender'=> $third_gender_q54, 
              'percentage_third_gender'=>helper::percentage_calculation($third_gender_q54,$gtotal_people),
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
              
             
              .'<td id="category_trainee_54" class="blank-cell row_cell">'.$row['category_trainee_54'].'</td>'
              .'<td id="number_of_training_54" class="blank-cell row_cell">'.$row['number_of_training_54'].'</td>'
              .'<td id="training_contents_54" class="blank-cell row_cell">'.$row['training_contents_54'].'</td>'
              .'<td id="men_q54" class="blank-cell row_cell">'.$row['men_q54'].'</td>'
              .'<td id="men_perchantege" class="blank-cell row_cell">'.$row['men_perchantege'].'</td>'   
              .'<td id="women_q54" class="blank-cell row_cell">'.$row['women_q54'].'</td>'
              .'<td id="women_perchantege" class="blank-cell row_cell">'.$row['women_perchantege'].'</td>'
              .'<td id="third_gender_q54" class="blank-cell row_cell">'.$row['third_gender_q54'].'</td>'
              .'<td id="percentage_third_gender" class="blank-cell row_cell">'.$row['percentage_third_gender'].'</td>'
              .'<td id="total_adult_by_category" class="blank-cell row_cell">'.$row['total_adult_by_category'].'</td>'
              .'<td id="total_adult_perchantage" class="blank-cell row_cell">'.$row['total_adult_perchantage'].'</td>' 
              .'</tr>';
            $rows .=$row;
            }
        } 
        return $rows;
    }

  

    public function agencies_judiciary_question54()
    {
        $government_data =$this->getting_government_data();
        $cat_name="Test";
        $rows=$this->htmlRows($government_data);
       return response()->json([
           'status' => 'success', 
           'data' =>[
               'q54_category_data' =>$rows,
             ],
         ], 200);
        exit();
     
    }

    public function participants54()
    {
        $government_data =$this->getting_government_data(true);
        $rows=$this->htmlRows($government_data);
          return response()->json([
              'status' => 'success', 
              'data' =>[
                  'q54_category_data' =>$rows,
                ],
            ], 200);
          exit();
    }


  
    

    public function q54_generate_pdf()
    {
        $getting_aggengy_data1 =$this->getting_government_data();
        $getting_aggengy_data2 =$this->getting_government_data(true);
        $table1_rows=$this->htmlRows($getting_aggengy_data1);
        $table2_rows=$this->htmlRows($getting_aggengy_data2);
        // $category_pie_chart_data=$this->awarness_all_partcipants();
        $pdf=PDF::loadView('superadmin.case.q54_table_chart',compact('table1_rows','table2_rows')); // test using image for ''data''
        $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif','isJavascriptEnabled'=>true]);
        // $pdf->setOption('enable-javascript', true);
        // $pdf->setOption('javascript-delay', 5000);
        // $pdf->setOption('enable-smart-shrinking', true);
        // $pdf->setOption('no-stop-slow-scripts', true);
        return $pdf->stream('q54_chart.pdf');
    }
}
