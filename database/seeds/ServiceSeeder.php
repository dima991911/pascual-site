<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'title' => 'Арсенал кусок гавна',
            'description' => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона',
            "avatar" =>  'marsh.jpg',
            "created_at" =>  Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table('services')->insert([
            'title' => 'Юра чмо',
            'description' => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона',
            "avatar" =>  'marsh.jpg',
            "created_at" =>  Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table('services')->insert([
            'title' => 'Діма урод',
            'description' => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона',
            "avatar" =>  'marsh.jpg',
            "created_at" =>  Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    }
}
