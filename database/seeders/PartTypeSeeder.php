<?php

namespace Database\Seeders;

use App\Models\PartType;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PartType::create([
            'id' => 4 ,
            'name_ar'    => 'Year' ,
            'name_en'    => 'عام' ,
            'type_code'  => 'Y' ,
            'start_date' => Carbon::parse('2023-10-01') ,
            'end_date'   => Carbon::parse('2024-09-01') ,
        ]);
        PartType::create([
            'id' => 1 ,
            'name_ar'    => 'Fall Semester' ,
            'name_en'    => 'الفصل الأول' ,
            'type_code'  => 'FA' ,
            'start_date' => Carbon::parse('2023-10-01') ,
            'end_date'   => Carbon::parse('2024-01-15') ,
        ]);
        PartType::create([
            'id' => 2 ,
            'name_ar'    => 'Spring Semester' ,
            'name_en'    => 'الفصل الثاني' ,
            'type_code'  => 'SP' ,
            'start_date' => Carbon::parse('2024-02-01') ,
            'end_date'   => Carbon::parse('2024-06-15') ,
        ]);
        PartType::create([
            'id' => 3 ,
            'name_ar'    => 'Summer Semester' ,
            'name_en'    => 'الفصل الصيفي' ,
            'type_code'  => 'SU' ,
            'start_date' => Carbon::parse('2023-07-01') ,
            'end_date'   => Carbon::parse('2024-09-01') ,
        ]);
    }
}
