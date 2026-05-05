<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\helper;
use App\Models\FortyFour;

use DB;
use PDF;
class Pichart44Controller extends Controller
{

 

 

  public static function getting_government_data ($participant=false){
    
    $government_data =FortyFour::government_train_diplomats_q44_query_data();
    $number_official_accused_men =0;
    $number_official_accused_women =0;
    $number_official_accused_third_gender =0;
    $total_adult=0;
  
    $total_perticipant=0;
    $government_category_data=[];
    if($participant){ 
      foreach ($government_data as $row) {
        $total_adult_by_category=$row->number_official_accused_men+$row->number_official_accused_women+$row->number_official_accused_third_gender;
        $total_people= $total_adult_by_category;
        $total_perticipant += $total_people;
      }
  }
  $gtotal_people=0;
    foreach ($government_data as $row) {
        $category=[];
        $number_official_accused_men+=$row->number_official_accused_men;
        $number_official_accused_women+=$row->number_official_accused_women;
        $number_official_accused_third_gender+=$row->number_official_accused_third_gender;         
        $total_adult_by_category=$row->number_official_accused_men+$row->number_official_accused_women+$row->number_official_accused_third_gender;
        $total_adult +=$total_adult_by_category;
        $total_people= $total_adult_by_category;
        $gtotal_people += $total_people;
        
        $men_perchantege=helper::percentage_calculation($row->number_official_accused_men, $participant ? $total_perticipant : $total_people);
        $women_perchantege=helper::percentage_calculation($row->number_official_accused_women,$participant ? $total_perticipant :$total_people);
        $thirdg_perchantege=helper::percentage_calculation($row->number_official_accused_third_gender,$participant ? $total_perticipant : $total_people);


        $total_adult_perchantage=helper::percentage_calculation($total_adult_by_category,$participant ? $total_perticipant : $total_people);
        $percentage_of_total_population=helper::percentage_calculation($total_people,$participant ? $total_perticipant : $total_people);
        $category=array(
          'ministry_department'=>$row->ministry_department,
          'number_official_accused_men'=> $row->number_official_accused_men, 
          'men_perchantege'=> $men_perchantege,   
          'number_official_accused_women'=> $row->number_official_accused_women, 
          'women_perchantege'=> $women_perchantege, 
          'number_official_accused_third_gender'=> $row->number_official_accused_third_gender, 
          'thirdg_perchantege'=>$thirdg_perchantege,
          'total_third_gender'=> $number_official_accused_third_gender, 
          'percentage_third_gender'=>$thirdg_perchantege,
          'total_adult_by_category'=>$total_adult_by_category,
          'total_adult_perchantage'=>$total_adult_perchantage,
          'percentage_of_total_population'=>$percentage_of_total_population,
        );
        array_push($government_category_data,$category);         
    }
    if(count($government_category_data)>0){
        $total_category=array(
          'ministry_department'=>'Total',
          'number_official_accused_men'=> $number_official_accused_men, 
          'men_perchantege'=> helper::percentage_calculation($number_official_accused_men,$gtotal_people),   
          'number_official_accused_women'=>$number_official_accused_women, 
          'women_perchantege'=> helper::percentage_calculation($number_official_accused_women,$gtotal_people), 
          'number_official_accused_third_gender'=> $number_official_accused_third_gender, 
          'thirdg_perchantege'=>helper::percentage_calculation($number_official_accused_third_gender,$gtotal_people),
          'total_third_gender'=> $number_official_accused_third_gender, 
          'percentage_third_gender'=>helper::percentage_calculation($number_official_accused_third_gender,$gtotal_people),
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
        
       
        .'<td id="ministry_department" class="blank-cell row_cell">'.$row['ministry_department'].'</td>'
        .'<td id="number_official_accused_men" class="blank-cell row_cell">'.$row['number_official_accused_men'].'</td>'
        .'<td id="men_perchantege" class="blank-cell row_cell">'.$row['men_perchantege'].'</td>'   
        .'<td id="number_official_accused_women" class="blank-cell row_cell">'.$row['number_official_accused_women'].'</td>'
        .'<td id="women_perchantege" class="blank-cell row_cell">'.$row['women_perchantege'].'</td>'
        .'<td id="number_official_accused_third_gender" class="blank-cell row_cell">'.$row['number_official_accused_third_gender'].'</td>'
        .'<td id="percentage_third_gender" class="blank-cell row_cell">'.$row['percentage_third_gender'].'</td>'
        .'<td id="total_adult_by_category" class="blank-cell row_cell">'.$row['total_adult_by_category'].'</td>'
        .'<td id="total_adult_perchantage" class="blank-cell row_cell">'.$row['total_adult_perchantage'].'</td>' 
        .'</tr>';
      $rows .=$row;
      }
  } 
  return $rows;
}





   
    public function adult44(){
      $government_data =$this->getting_government_data();
      $cat_name="Test";
      $rows=$this->htmlRows($government_data);
     return response()->json([
         'status' => 'success', 
         'data' =>[
             'q44_category_data' =>$rows,
           ],
       ], 200);
      exit();
}
   
    public function participants44(){
     $government_data =$this->getting_government_data(true);
        $rows=$this->htmlRows($government_data);
          return response()->json([
              'status' => 'success', 
              'data' =>[
                  'q44_category_data' =>$rows,
                ],
            ], 200);
          exit();
    }

    public function q44_generate_pdf()
    {
      
      $awarness_data_table1 =$this->getting_government_data();
      $awarness_data_table2 =$this->getting_government_data(true);
      $table1_rows=$this->htmlRows($awarness_data_table1);
      $table2_rows=$this->htmlRows($awarness_data_table2);
      // $category_pie_chart_data=$this->awarness_all_partcipants();
      $pdf=PDF::loadView('superadmin.case.q44_table_chart',compact('table1_rows','table2_rows')); // test using image for ''data''
      $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif','isJavascriptEnabled'=>true]);
      // $pdf->setOption('enable-javascript', true);
      // $pdf->setOption('javascript-delay', 5000);
      // $pdf->setOption('enable-smart-shrinking', true);
      // $pdf->setOption('no-stop-slow-scripts', true);
      return $pdf->stream('q44_chart.pdf');
    }
   
    
}
