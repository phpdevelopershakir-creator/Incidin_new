<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $banners = [
    [
        'image' => 'uploads/banner/banner.png',
        'status'=> 1,
    ],
    
];

foreach ($banners as $banner) {
    Banner::create([
        'image'  => $banner['image'],
        'status' => $banner['status'],
    ]);
    }
}

}