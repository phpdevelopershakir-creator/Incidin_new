<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $divisions = [
            ['name' => 'Dhaka', 'bn_name' => 'ঢাকা'],
            ['name' => 'Chattogram', 'bn_name' => 'চট্টগ্রাম'],
            ['name' => 'Khulna', 'bn_name' => 'খুলনা'],
            ['name' => 'Rajshahi', 'bn_name' => 'রাজশাহী'],
            ['name' => 'Barishal', 'bn_name' => 'বরিশাল'],
            ['name' => 'Sylhet', 'bn_name' => 'সিলেট'],
            ['name' => 'Rangpur', 'bn_name' => 'রংপুর'],
            ['name' => 'Mymensingh', 'bn_name' => 'ময়মনসিংহ'],
            ['name' => 'National', 'bn_name' => 'জাতীয়'],
        ];

        foreach ($divisions as $division) {
            DB::table('divisions')->insert([
                'name' => $division['name'],
                'bn_name' => $division['bn_name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
