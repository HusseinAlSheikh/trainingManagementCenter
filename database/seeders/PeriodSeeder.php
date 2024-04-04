<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $periods = [
            [
                'name_ar' => 'الفترة الاولى' ,
                'name_en' => 'First Period' ,
                'is_attend' => true ,
                'start_time' => '' ,
                'end_time' => '' ,
            ],
        ] ;
    }
}
