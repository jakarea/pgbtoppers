<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('age');
            $table->string('distance');
            $table->string('gender');
            $table->string('days')->nullable();
            $table->string('desired');
            $table->string('license');
            $table->string('candidate_status');  
            $table->string('experience');  
            $table->string('other');  
            $table->string('services'); 
            $table->string('approved')->default(0);  
            $table->string('serving')->nullable();  
            $table->string('specific_experience')->nullable();  
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
        Schema::dropIfExists('services');
    }
}
