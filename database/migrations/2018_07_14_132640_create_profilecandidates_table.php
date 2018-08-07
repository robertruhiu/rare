<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilecandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profilecandidates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('candidate_id')->nullable();

            $table->string('profilecandidatePicture')->nullable();

            $table->string('linkedin')->nullable();
            
            $table->string('github')->nullable();
            $table->string('biography')->nullable();
            
           
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
        Schema::dropIfExists('profilecandidates');
    }
}
