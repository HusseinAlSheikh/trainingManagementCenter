<?php

namespace Database\Seeders;

use App\Models\Day;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $days = [
            [
                'name_ar' => 'السبت' ,
                'name_en' => 'Saturday' ,
                'attend_day' => false ,
                'day_order' => 1 ,
                'short_name_ar' => 'س' ,
                'short_name_en' => 'Sat' ,
            ],
            [
                'name_ar' => 'الأحد' ,
                'name_en' => 'Sunday' ,
                'attend_day' => true ,
                'day_order' => 2 ,
                'short_name_ar' => 'أح' ,
                'short_name_en' => 'Sun' ,
            ],
            [
                'name_ar' => 'الإثنين' ,
                'name_en' => 'Monday' ,
                'attend_day' => true ,
                'day_order' => 3 ,
                'short_name_ar' => 'أث' ,
                'short_name_en' => 'Mon' ,
            ],
            [
                'name_ar' => 'الثلاثاء' ,
                'name_en' => 'Tuesday' ,
                'attend_day' => true ,
                'day_order' => 4 ,
                'short_name_ar' => 'ث' ,
                'short_name_en' => 'Tue' ,
            ],
            [
                'name_ar' => 'الأربعاء' ,
                'name_en' => 'Wednesday' ,
                'attend_day' => true ,
                'day_order' => 5 ,
                'short_name_ar' => 'أر' ,
                'short_name_en' => 'Wed' ,
            ],
            [
                'name_ar' => 'الخميس' ,
                'name_en' => 'Thursday' ,
                'attend_day' => true ,
                'day_order' => 6 ,
                'short_name_ar' => 'خ' ,
                'short_name_en' => 'Thu' ,
            ],
            [
                'name_ar' => 'الجمعة' ,
                'name_en' => 'Friday' ,
                'attend_day' => false ,
                'day_order' => 7 ,
                'short_name_ar' => 'جم' ,
                'short_name_en' => 'Fri' ,
            ],
        ] ;
        foreach ($days as $day){
            Day::create([
                'name_ar' => $day['name_ar'] ,
                'name_en' => $day['name_en'] ,
                'attend_day' => $day['attend_day'] ,
                'day_order' => $day['day_order'] ,
                'short_name_ar' => $day['short_name_ar'] ,
                'short_name_en' => $day['short_name_en'] ,
            ]);
        }
    }
}
