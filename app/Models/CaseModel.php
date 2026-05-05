<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Case\SexTraffickingForceLabor;
use App\Models\Case\TraffickingLocation;
use DB;

class CaseModel extends Model
{
    use HasFactory;

    function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function one()
    {
        return $this->hasMany(One::class, 'case_id');
    }

    public function oneb()
    {
        return $this->hasMany(OneB::class, 'case_id');
    }

    public function foura()
    {
        return $this->hasMany(FourA::class, 'case_id');
    }

    public function fourb()
    {
        return $this->hasMany(FourB::class, 'case_id');
    }







    public function two()
    {
        return $this->hasMany(Two::class, 'case_id');
    }





    public function three()
    {
        return $this->hasMany(Three::class, 'case_id');
    }

    public function four()
    {
        return $this->hasMany(Four::class, 'case_id');
    }


    public function five()
    {
        return $this->hasMany(Five::class, 'case_id');
    }

    public function six()
    {
        return $this->hasMany(Six::class, 'case_id');
    }

    public function seven()
    {
        return $this->hasMany(Seven::class, 'case_id');
    }
    public function eight()
    {
        return $this->hasMany(Eight::class, 'case_id');
    }


    public function nine()
    {
        return $this->hasMany(Nine::class, 'case_id');
    }

    public function fifteennine()
    {
        return $this->hasMany(Fifteen::class, 'case_id');
    }


    public function fifteen()
    {
        return $this->hasMany(Fifteen::class, 'case_id')
            ->leftJoin('q15_locations', 'formal_written_procedures_15q.id', '=', 'q15_locations.q15_id')
            ->leftJoin('divisions', DB::raw('q15_locations.location_id::bigint'), '=', 'divisions.id')
            ->select('formal_written_procedures_15q.*')
            ->selectRaw("STRING_AGG(divisions.name, ', ') as division_name")
            ->groupBy('formal_written_procedures_15q.id')
            ->orderBy('formal_written_procedures_15q.id', 'asc');
    }

    public function fiftynine()
    {
        return $this->hasMany(FiftyNine::class, 'case_id')
            ->leftJoin('q59_locations', 'conduct_awareness_activities_q59.id', '=', 'q59_locations.q59_id')
            ->leftJoin('divisions', DB::raw('q59_locations.location_id::bigint'), '=', 'divisions.id')
            ->select('conduct_awareness_activities_q59.*')
            ->selectRaw("STRING_AGG(divisions.name, ', ') as division_name")
            ->groupBy('conduct_awareness_activities_q59.id')
            ->orderBy('conduct_awareness_activities_q59.id', 'asc');
    }



    public function ten()
    {
        return $this->hasMany(Ten::class, 'case_id');
    }

    public function eleven()
    {
        return $this->hasMany(Eleven::class, 'case_id');
    }

    public function twelve()
    {
        return $this->hasMany(Twelve::class, 'case_id');
    }
    public function thirteen()
    {
        return $this->hasMany(Thirteen::class, 'case_id');
    }
    public function fourteen()
    {
        return $this->hasMany(Fourteen::class, 'case_id');
    }

    public function sixteen()
    {
        return $this->hasMany(Sixteen::class, 'case_id');
    }
    public function seventeen()
    {
        return $this->hasMany(Seventeen::class, 'case_id');
    }
    public function eighteen()
    {
        return $this->hasMany(Eighteen::class, 'case_id');
    }
    public function nineteen()
    {
        return $this->hasMany(Nineteen::class, 'case_id');
    }


    public function twenty()
    {
        return $this->hasMany(Twenty::class, 'case_id');
    }

    public function twentyone()
    {
        return $this->hasMany(TwentyOne::class, 'case_id');
    }
    public function twentytwo()
    {
        return $this->hasMany(TwentyTwo::class, 'case_id');
    }

    public function twentythree()
    {
        return $this->hasMany(TwentyThree::class, 'case_id');
    }
    public function twentyfour()
    {
        return $this->hasMany(TwentyFour::class, 'case_id');
    }
    public function twentyfive()
    {
        return $this->hasMany(TwentyFive::class, 'case_id');
    }
    public function twentysix()
    {
        return $this->hasMany(TwentySix::class, 'case_id');
    }

    public function twentyseven()
    {
        return $this->hasMany(TwentySeven::class, 'case_id');
    }
    public function twentyeight()
    {
        return $this->hasMany(TwentyEight::class, 'case_id');
    }
    public function twentynine()
    {
        return $this->hasMany(TwentyNine::class, 'case_id');
    }
    public function thirty()
    {
        return $this->hasMany(Thirty::class, 'case_id');
    }

    public function thirtyone()
    {
        return $this->hasMany(ThiryOne::class, 'case_id');
    }
    public function thirtytwo()
    {
        return $this->hasMany(ThirtyTwo::class, 'case_id');
    }
    public function thirtythree()
    {
        return $this->hasMany(ThirtyThree::class, 'case_id');
    }
    public function thirtyfour()
    {
        return $this->hasMany(ThirtyFour::class, 'case_id');
    }
    public function thirtyfive()
    {
        return $this->hasMany(ThirtyFive::class, 'case_id');
    }
    public function thirtysix()
    {
        return $this->hasMany(ThirtySix::class, 'case_id');
    }
    public function thirtyseven()
    {
        return $this->hasMany(ThirtySeven::class, 'case_id');
    }
    public function thirtyeight()
    {
        return $this->hasMany(ThirtyEight::class, 'case_id');
    }

    public function thirtynine()
    {
        return $this->hasMany(ThirtyNine::class, 'case_id');
    }
    public function forty()
    {
        return $this->hasMany(Fourty::class, 'case_id');
    }
    public function fortyone()
    {
        return $this->hasMany(FortyOne::class, 'case_id');
    }
    public function fortytwo()
    {
        return $this->hasMany(FortyTwo::class, 'case_id');
    }
    public function fortythree()
    {
        return $this->hasMany(FortyThree::class, 'case_id');
    }

    public function fortyfour()
    {
        return $this->hasMany(FortyFour::class, 'case_id');
    }
    public function fortyfive()
    {
        return $this->hasMany(FortyFive::class, 'case_id');
    }
    public function fortysix()
    {
        return $this->hasMany(FortySix::class, 'case_id');
    }

    public function fortyseven()
    {
        return $this->hasMany(FortySeven::class, 'case_id');
    }

    public function fortyeight()
    {
        return $this->hasMany(FortyEight::class, 'case_id');
    }


    public function fortynine()
    {
        return $this->hasMany(FortyNine::class, 'case_id');
    }
    public function fifty()
    {
        return $this->hasMany(Fifty::class, 'case_id');
    }


    public function fiftyone()
    {
        return $this->hasMany(FiftyOne::class, 'case_id');
    }
    public function fiftytwo()
    {
        return $this->hasMany(FiftyTwo::class, 'case_id');
    }

    public function fiftythree()
    {
        return $this->hasMany(FiftyThree::class, 'case_id');
    }

    public function fiftyfour()
    {
        return $this->hasMany(FiftyFour::class, 'case_id');
    }

    public function fiftyfive()
    {
        return $this->hasMany(FiftyFive::class, 'case_id');
    }
    public function fiftysix()
    {
        return $this->hasMany(FiftySix::class, 'case_id');
    }
    public function fiftyseven()
    {
        return $this->hasMany(FiftySeven::class, 'case_id');
    }
    public function fiftyeight()
    {
        return $this->hasMany(FiftyEight::class, 'case_id');
    }


    public function sixty()
    {
        return $this->hasMany(Sixty::class, 'case_id');
    }
    public function sixty_three()
    {
        return $this->hasMany(SixtyThree::class, 'case_id');
    }

    public function situation_prevent()
    {
        return $this->hasMany(SituationPreventionYesNo::class, 'case_id');
    }


    public function q9_locations()
    {
        return $this->hasMany(Q9Questions::class, 'q9_id', 'id');
    }
}
