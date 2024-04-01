<?php

use App\Models\Instructor;
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
        Schema::create('instructor_levels', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Instructor::class);
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
        Schema::dropIfExists('instructor_levels');
    }
};
