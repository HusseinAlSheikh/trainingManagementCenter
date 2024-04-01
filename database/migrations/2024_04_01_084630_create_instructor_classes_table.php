<?php

use App\Models\Instructor;
use App\Models\StudyClass;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Builder\Class_;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructor_classes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Instructor::class);
            $table->foreignIdFor(StudyClass::class);
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
        Schema::dropIfExists('instructor_classes');
    }
};
