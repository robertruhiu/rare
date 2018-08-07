<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontends', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('level')->nullable();
            $table->string('type')->nullable();
            $table->integer('timeassessment')->nullable();
            $table->string('image1')->nullable();
            $table->text('requirement1')->nullable();
            $table->text('requirement2')->nullable();
            $table->text('requirement3')->nullable();
            $table->text('requirement4')->nullable();
            $table->text('requirement5')->nullable();
            $table->text('requirement6')->nullable();
            $table->integer('numberapplicant')->nullable();
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
        Schema::dropIfExists('frontends');
    }
}
