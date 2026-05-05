<?php

namespace App\Http\Controllers\SuperAdmin;
use App\Helpers\helper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nine;
use DB;

// use Barryvdh\DomPDF\Facade\Pdf;
use PDF;
global $types_categories;
global $type_activities_location;
$types_categories=array('1'=>'Courtyard meeting', '2'=>'Bazar/hatt meeting', '3'=>'CTC meeting', '4'=>'Consultation', '5'=>'Poster', '6'=>'leaflet', '7'=>'Booklet', '8'=>'SMS', '9'=>'Newsletter', '10'=>'Billboard', '11'=>'Folk show', '12'=>'Film show', '13'=>'Miking', '14'=>'Web campaign');   
$type_activities_location=array('1'=>'Barisal', 
'2'=>'Chattogram', '3'=>'Dhaka','4'=>'Khulna'
,'5'=>'Mymensingh','6'=>'Rajshahi','7'=>'Rangpur','8'=>'Sylhet','8'=>'Nation');
class Pichart9Controller extends Controller
{


  public function awarness_activities_q9_query_data (){
    //  DB::connection()->enableQueryLog(); 
    $awarness_activities_q9_data = DB::table('awareness_activities_q9')
    ->select(
        DB::raw('SUM(type_activities_men) as type_activities_men'),
        DB::raw('SUM(type_activities_women) as type_activities_women'),
        DB::raw('SUM(type_activities_third_gender) as type_activities_third_gender'),
        DB::raw('SUM(type_activities_boy) as type_activities_boy'),
        DB::raw('SUM(type_activities_girl) as type_activities_girl'),
        'type_activities','type_activities_location'
    )
    ->where('type_activities', '>=', 1)
    ->groupBy('type_activities','type_activities_location')
    ->get();
    // $queries = DB::getQueryLog();
    return $awarness_activities_q9_data ;
  }

  public function getting_awarness_data ($participant=false){
      global $types_categories;
      global $type_activities_location;
      $awarness_data =$this->awarness_activities_q9_query_data();
      $total_type_activities_men =0;
      $total_type_activities_women =0;
      $total_type_activities_thirdg =0;
      $total_adult=0;
      $total_children=0;
      $category_total_boys =0;
      $category_total_girls =0;
      $total_perticipant=0;
      $awarness_category_data=[];
      if($participant){ 
        foreach ($awarness_data as $row) {
          $total_adult_by_category=$row->type_activities_men+$row->type_activities_women+$row->type_activities_third_gender;
          $total_children_by_category=$row->type_activities_boy+$row->type_activities_girl;
          $total_people= $total_adult_by_category+$total_children_by_category;
          $total_perticipant += $total_people;
        }
    }
    $gtotal_people=0;
      foreach ($awarness_data as $row) {
          $category=[];
          $total_type_activities_men+=$row->type_activities_men;
          $total_type_activities_women+=$row->type_activities_women;
          $total_type_activities_thirdg+=$row->type_activities_third_gender;
          $category_total_boys+=$row->type_activities_boy;
          $category_total_girls+=$row->type_activities_girl;         
          $total_adult_by_category=$row->type_activities_men+$row->type_activities_women+$row->type_activities_third_gender;
          $total_adult +=$total_adult_by_category;
          $total_children_by_category=$row->type_activities_boy+$row->type_activities_girl;
          $total_children +=$total_children_by_category;
          $total_people= $total_adult_by_category+$total_children_by_category;
          $gtotal_people += $total_people;
          $men_perchantege=helper::percentage_calculation($row->type_activities_men, $participant ? $total_perticipant : $total_people);
          $women_perchantege=helper::percentage_calculation($row->type_activities_women,$participant ? $total_perticipant :$total_people);
          $thirdg_perchantege=helper::percentage_calculation($row->type_activities_third_gender,$participant ? $total_perticipant : $total_people);
          $boys_perchantege=helper::percentage_calculation($row->type_activities_boy,$participant ? $total_perticipant : $total_people);
          $girls_perchantege=helper::percentage_calculation($row->type_activities_girl,$participant ? $total_perticipant : $total_people);
          $children_perchnatage=helper::percentage_calculation($total_children_by_category,$participant ? $total_perticipant : $total_people);
          $total_adult_perchantage=helper::percentage_calculation($total_adult_by_category,$participant ? $total_perticipant : $total_people);
          $percentage_of_total_population=helper::percentage_calculation($total_people,$participant ? $total_perticipant : $total_people);
          $category=array(
            'type_activities'=>helper::arraykeys_to_value($types_categories,$row->type_activities),
            'type_activities_location'=>helper::arraykeys_to_value($type_activities_location,$row->type_activities_location),
            'type_activities_men'=> $row->type_activities_men, 
            'men_perchantege'=> $men_perchantege,   
            'type_activities_women'=> $row->type_activities_women, 
            'women_perchantege'=> $women_perchantege, 
            'type_activities_third_gender'=> $row->type_activities_third_gender, 
            'thirdg_perchantege'=>$thirdg_perchantege,
            'total_third_gender'=> $total_type_activities_thirdg, 
            'percentage_third_gender'=>$thirdg_perchantege,
            'type_activities_boy' => $row->type_activities_boy,
            'boys_perchantege'=>$boys_perchantege,
            'type_activities_girl' => $row->type_activities_girl,
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
            'type_activities'=>'Total',
            'type_activities_location'=>'',
            'type_activities_men'=> $total_type_activities_men, 
            'men_perchantege'=> helper::percentage_calculation($total_type_activities_men,$gtotal_people),   
            'type_activities_women'=>$total_type_activities_women, 
            'women_perchantege'=> helper::percentage_calculation($total_type_activities_women,$gtotal_people), 
            'type_activities_third_gender'=> $total_type_activities_thirdg, 
            'thirdg_perchantege'=>helper::percentage_calculation($total_type_activities_thirdg,$gtotal_people),
            'total_third_gender'=> $total_type_activities_thirdg, 
            'percentage_third_gender'=>helper::percentage_calculation($total_type_activities_thirdg,$gtotal_people),
            'type_activities_boy' => $category_total_boys,
            'boys_perchantege'=>helper::percentage_calculation($category_total_boys,$gtotal_people),
            'type_activities_girl' => $category_total_girls,
            'girls_perchantege'=>helper::percentage_calculation($category_total_girls,$gtotal_people),
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
            .'<td id="type_activities" class="blank-cell row_cell">'.$row['type_activities'].'</td>'
            
            .'<td id="type_activities_men" class="blank-cell row_cell">'.$row['type_activities_men'].'</td>'
            .'<td id="men_perchantege" class="blank-cell row_cell">'.$row['men_perchantege'].'</td>'   
            .'<td id="type_activities_women" class="blank-cell row_cell">'.$row['type_activities_women'].'</td>'
            .'<td id="women_perchantege" class="blank-cell row_cell">'.$row['women_perchantege'].'</td>'
            .'<td id="type_activities_third_gender" class="blank-cell row_cell">'.$row['type_activities_third_gender'].'</td>'
            .'<td id="thirdg_perchantege" class="blank-cell row_cell">'.$row['thirdg_perchantege'].'</td>'
            .'<td id="total_adult_by_category" class="blank-cell row_cell">'.$row['total_adult_by_category'].'</td>'
            .'<td id="total_adult_perchantage" class="blank-cell row_cell">'.$row['total_adult_perchantage'].'</td>'
            .'<td id="courtyard_total_boys" class="blank-cell row_cell">'.$row['type_activities_boy'].'</td>'
            .'<td id="boys_perchantege" class="blank-cell row_cell">'.$row['boys_perchantege'].'</td>'
            .'<td id="type_activities_girl" class="blank-cell row_cell">'.$row['type_activities_girl'].'</td>'
            .'<td id="girls_perchantege" class="blank-cell row_cell">'.$row['girls_perchantege'].'</td>'
            .'<td id="total_children_by_category" class="blank-cell row_cell">'.$row['total_children_by_category'].'</td>'
            .'<td id="children_perchnatage" class="blank-cell row_cell">'.$row['children_perchnatage'].'</td>'
            .'<td id="total_courtyard_meeting" class="blank-cell row_cell">'.$row['total_people'].'</td>'
            .'<td id="totalCourtyuardMetting" class="blank-cell row_cell">'.$row['percentage_of_total_population'].'</td>'  
               .'<td id="type_activities_location" class="blank-cell row_cell">'.$row['type_activities_location'].'</td>'
            .'</tr>';
          $rows .=$row;
          }
      } 
      return $rows;
  }

  public function pichart9 () {
     $awarness_data =$this->getting_awarness_data();
     $rows=$this->htmlRows($awarness_data);
    return response()->json([
        'status' => 'success', 
        'data' =>[
            'q9_category_data' =>$rows,
          ],
      ], 200);
     exit();
    }

    public function Q9DataTotalParticipant()
    {
        $awarness_data =$this->getting_awarness_data(true);
      $rows=$this->htmlRows($awarness_data);
        return response()->json([
            'status' => 'success', 
            'data' =>[
                'q9_category_data' =>$rows,
              ],
          ], 200);
        exit();
    }


    public function awarness_all_partcipants() {
        
      $awarness_data =$this->getting_awarness_data(true);
      $category_pie_chart_data=[];
      $counter = 1;
      if(isset( $awarness_data) && !empty( $awarness_data) ){
            foreach($awarness_data as $value)
            {
                // Skipping  Last Row             
                if($counter == count($awarness_data)) continue;
                $counter++;
                array_push($category_pie_chart_data,$value['percentage_of_total_population']);
            }
      }
      return $category_pie_chart_data;

    }
   
     //Pie Char value Return 
    public function distribution_participants () {

      $category_pie_chart_data=$this->awarness_all_partcipants();
      return response()->json([
        'status' => 'success', 
        'data' =>[
            'q9_category_pie_chart_data' =>$category_pie_chart_data,
          ],
      ], 200);
    exit();      
    }



    public function q9_generate_pdf(Request $request)
    {
      $data = $request->chartData;
      $awarness_data_table1 =$this->getting_awarness_data();
      $awarness_data_table2 =$this->getting_awarness_data(true);
      $table1_rows=$this->htmlRows($awarness_data_table1);
      $table2_rows=$this->htmlRows($awarness_data_table2);
      // $category_pie_chart_data=$this->awarness_all_partcipants();
      $pdf=PDF::loadView('superadmin.case.q9_table_chart',compact('table1_rows','table2_rows','data')); // test using image for ''data''
      $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif','isJavascriptEnabled'=>true]);
      // $pdf->setOption('enable-javascript', true);
      // $pdf->setOption('javascript-delay', 5000);
      // $pdf->setOption('enable-smart-shrinking', true);
      // $pdf->setOption('no-stop-slow-scripts', true);
      return $pdf->stream('q9_chart.pdf');
      // return view('superadmin.case.q9_table_chart',compact('table1_rows','table2_rows','category_pie_chart_data'));
      
    }

    // private function getPdfOptions(): Options
    // {
    //     $pdfOptions = new Options();
    //     $pdfOptions->set('defaultFont', 'Arial');
    //     $pdfOptions->setIsPhpEnabled(true);
    //     $pdfOptions->setIsRemoteEnabled(true);
    //     $pdfOptions->setIsJavascriptEnabled(true);
    //     $pdfOptions->set(true);

    //     return $pdfOptions;
    // }

  }

  
