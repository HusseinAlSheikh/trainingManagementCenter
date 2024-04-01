<?php

use App\Models\Day;
use App\Models\Instructor;
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
        Schema::create('instructor_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Instructor::class);
            $table->foreignIdFor(Day::class);
            $table->time('from_time');
            $table->time('till_time');
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
        Schema::dropIfExists('instructor_schedules');
    }
};
