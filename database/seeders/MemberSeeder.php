<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i <10;$i++ ){
            DB::table('members')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10). '@outlook.com',
                'password'=> bcrypt('password123'),
                'is_admin'=> rand(0,1),
            ]);
        }
    }
}
