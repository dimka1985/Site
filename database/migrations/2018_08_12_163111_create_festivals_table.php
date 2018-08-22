<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFestivalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('festivals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('instagram');
            $table->string('place');
            $table->string('address');
            $table->string('url');
            $table->string('bg');
            $table->string('heading');
            $table->text('text');
            $table->string('image');
            $table->date('begin_date');
            $table->date('end_date');
            $table->string('time');
            $table->string('price');
            $table->string('award')->nullable();
            $table->string('award_image')->nullable();
            $table->string('award_date')->nullable();
            $table->string('award_time')->nullable();
            $table->boolean('passed')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('festivals');
    }
}
