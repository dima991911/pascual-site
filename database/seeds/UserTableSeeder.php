<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'login' => 'pascual_admin',
            'password' => bcrypt('123459876'),
            "created_at" =>  Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    }
}
