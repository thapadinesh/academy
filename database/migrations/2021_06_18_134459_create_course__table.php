<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->nullable();
            $table->string('slug')->nullable();
            $table->string('name')->nullable();
            $table->string('fee_off')->nullable();
            $table->string('fee')->nullable();
            $table->text('details')->nullable();
            $table->string('feature_img')->nullable();
            $table->date('start_date')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('course');
    }
}
