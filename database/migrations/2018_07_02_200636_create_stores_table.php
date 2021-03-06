<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->nullable();
            $table->string('assessment_id')->nullable();
            $table->string('level')->nullable();
            $table->string('type')->nullable();
            $table->text('requirement1')->nullable();
            $table->text('requirement2')->nullable();
            $table->text('requirement3')->nullable();
            $table->text('requirement4')->nullable();
            $table->text('requirement5')->nullable();
            $table->text('requirement6')->nullable();
            $table->string('image1')->nullable();
            $table->text('description')->nullable();
            $table->string('name')->nullable();
            $table->integer('numberapplicant')->nullable();

            $table->string('proglanguage')->nullable();
            $table->string('framelanguage')->nullable();
            $table->string('framecss')->nullable();
            $table->string('framehtml')->nullable();
            $table->integer('timeassessment')->nullable();

            $table->date('dateassessment')->nullable();
            $table->date('endassessment')->nullable();

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
        Schema::dropIfExists('stores');
    }
}
