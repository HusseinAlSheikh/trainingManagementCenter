<?php

namespace Database\Seeders;

use App\Models\StudyLevel;
use App\Models\StudyLevelCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudyLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name_en'   => 'Kindergarten' ,
                'name_ar'   => 'روضة الأطفال' ,
                'code'      => 'KDG' ,
                'is_active' => true ,
                'study_levels' => [
                    [
                        'name_en'     => 'First Kindergarten' ,
                        'name_ar'     => 'الطفولة الأولى' ,
                        'code'        => 'KDG-1' ,
                        'is_active'   => true ,
                    ],
                    [
                        'name_en'     => 'Second Kindergarten' ,
                        'name_ar'     => 'الطفولة الثانية' ,
                        'code'        => 'KDG-2' ,
                        'is_active'   => true ,
                    ],
                    [
                        'name_en'     => 'Third Kindergarten' ,
                        'name_ar'     => 'الطفولة الثالثة' ,
                        'code'        => 'KDG-3' ,
                        'is_active'   => true ,
                    ],
                ]
            ],
            [
                'name_en'   => 'Elementray' ,
                'name_ar'   => 'الإبتدائية' ,
                'code'      => 'ELM' ,
                'is_active' => true ,
                'study_levels' => [
                    [
                        'name_en'     => 'First Grade' ,
                        'name_ar'     => 'الصف الأول' ,
                        'code'        => 'ELM-1' ,
                        'is_active'   => true ,
                    ],
                    [
                        'name_en'     => 'Second Grade' ,
                        'name_ar'     => 'الصف الثاني' ,
                        'code'        => 'ELM-2' ,
                        'is_active'   => true ,
                    ],
                    [
                        'name_en'     => 'Third Grade' ,
                        'name_ar'     => 'الصف الثالث' ,
                        'code'        => 'ELM-3' ,
                        'is_active'   => true ,
                    ],
                    [
                        'name_en'     => 'Fourth Grade' ,
                        'name_ar'     => 'الصف الرابع' ,
                        'code'        => 'ELM-4' ,
                        'is_active'   => true ,
                    ],
                    [
                        'name_en'     => 'Fifth Grade' ,
                        'name_ar'     => 'الصف الخامس' ,
                        'code'        => 'ELM-5' ,
                        'is_active'   => true ,
                    ],
                    [
                        'name_en'     => 'Sixth Grade' ,
                        'name_ar'     => 'الصف السادس' ,
                        'code'        => 'ELM-6' ,
                        'is_active'   => true ,
                    ],
                ]
            ],
            [
                'name_en'   => 'Secondary' ,
                'name_ar'   => 'الإعدادية' ,
                'code'      => 'SEC' ,
                'is_active' => true ,
                'study_levels' => [
                    [
                        'name_en'     => 'Seventh Grade' ,
                        'name_ar'     => 'الصف السابع' ,
                        'code'        => 'SEC-1' ,
                        'is_active'   => true ,
                    ],
                    [
                        'name_en'     => 'Eighth Grade' ,
                        'name_ar'     => 'الصف الثامن' ,
                        'code'        => 'SEC-2' ,
                        'is_active'   => true ,
                    ],
                    [
                        'name_en'     => 'Ninths Grade' ,
                        'name_ar'     => 'الصف التاسع' ,
                        'code'        => 'SEC-3' ,
                        'is_active'   => true ,
                    ],
                ]
            ],
            [
                'name_en'   => 'High School' ,
                'name_ar'   => 'الثانوية' ,
                'code'      => 'HIS' ,
                'is_active' => true ,
                'study_levels' => [
                    [
                        'name_en'     => 'Tenth Grade' ,
                        'name_ar'     => 'الصف العاشر' ,
                        'code'        => 'HIS-1' ,
                        'is_active'   => true ,
                    ],
                    [
                        'name_en'     => 'Eleventh Grade' ,
                        'name_ar'     => 'الصف الثاني الثانوي' ,
                        'code'        => 'HIS-2' ,
                        'is_active'   => true ,
                    ],
                    [
                        'name_en'     => 'Twelfth grade' ,
                        'name_ar'     => 'الصف الثالث الثانوي' ,
                        'code'        => 'HIS-3' ,
                        'is_active'   => true ,
                    ],
                ]
            ],
        ];
        //---------------------
        foreach ($categories as $category){
            $categoryRecord = StudyLevelCategory::create([
                'name_en'   => $category['name_en'],
                'name_ar'   => $category['name_ar'],
                'code'      => $category['code'],
                'is_active' => $category['is_active'],
            ]);
            foreach ($category['study_levels'] as $level){
                StudyLevel::create([
                    'name_en'     => $level['name_en'],
                    'name_ar'     => $level['name_ar'],
                    'code'        => $level['code'],
                    'is_active'   => $level['is_active'],
                    'category_id' => $categoryRecord->id ,
                ]);
            }
        }
    }
}
