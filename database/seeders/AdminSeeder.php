<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin= new User();
        $admin->name='SUPER ADMIN';
        $admin->email='admin@gmail.com';
        $admin->password=bcrypt('12345678');
        $admin->user_type='Super Admin';
        $admin->status=1;
        $admin->save();
    }
}
