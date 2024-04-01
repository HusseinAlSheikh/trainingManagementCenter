<?php

use App\Models\StudyLevel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar');
            $table->string('name_en');
            $table->string('official_name_ar');
            $table->string('official_name_en');
            $table->string('course_code');
            $table->string('cover_path');
            $table->text('descripition_ar');
            $table->text('descripition_en');
            $table->integer('full_mark');
            $table->smallInteger('part_count');
            $table->enum('course_type' , ['THR','PRA','THR_PRA'] );
            $table->foreignIdFor(StudyLevel::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
