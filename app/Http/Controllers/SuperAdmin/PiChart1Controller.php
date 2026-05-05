<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SituationPreventionYesNo;
class PiChart1Controller extends Controller
{
    public function pichartone()
    {
        $totalOneYes = SituationPreventionYesNo::where('is_trafficking_location_q1','1')->count();
        $totalOneNo = SituationPreventionYesNo::where('is_trafficking_location_q1','0')->count();
       
        
        
    // Combine totals
    $combinedOneTotalYes = $totalOneYes;
    $combinedOneTotalNo = $totalOneNo;
    
    $GrandTotal=$totalOneYes+$totalOneNo;
    $totalYesPercentage = ($combinedOneTotalYes/$GrandTotal)*100;
    $totalNoPercentage = ($combinedOneTotalNo/$GrandTotal)*100;
    return response()->json([
        'status' => 'success', 
        'data' =>['totalYesPercentage' =>sprintf("%.2f", $totalYesPercentage),'totalNoPercentage' =>sprintf("%.2f", $totalNoPercentage)],
    
    ], 200);
    
    }
}
