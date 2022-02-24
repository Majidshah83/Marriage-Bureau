<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
          
            $table->id();
            $table->string('name', 255);
            $table->string('gender', 255);
            $table->date('date_of_birth');
             $table->string('phone_number', 255);
            $table->integer('height');
            $table->integer('weight');
           $table->string('disablity');
            $table->string('cast');
            $table->string('religion');
           $table->text('adress');
           $table->string('house_owner');
           $table->string('image',255);
           $table->string('qualification');
           $table->string('university_college');
            $table->string('designation');
            $table->string('job_type');
             $table->string('bussiness_owner');
             $table->string('father_occupation');
             $table->string('mother_ccupation');
             $table->string('social_status');
             $table->string('siblings');
             $table->text('more_details');
             $table->integer('satatus');
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
        Schema::dropIfExists('user_profiles');
    }
}
