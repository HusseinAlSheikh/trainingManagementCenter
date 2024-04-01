<?php

use App\Models\Part;
use App\Models\PartType;
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
        Schema::create('parts', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar');
            $table->string('name_en');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('semester_name_en');
            $table->string('semester_name_ar');
            $table->string('year_name_en');
            $table->string('year_name_ar');
            $table->string('part_code');
            $table->integer('semester_order');
            $table->foreignIdFor(PartType::class);
            $table->foreignIdFor(Part::class);
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
        Schema::dropIfExists('parts');
    }
};
