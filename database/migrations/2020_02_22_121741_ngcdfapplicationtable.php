<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ngcdfapplicationtable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngcdfbursaryapplication', function (Blueprint $table) {
            $table->string('user_id');
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('family_name')->nullable();
            $table->string('email_address')->nullable();
            $table->string('identifidation_number')->nullable();
            $table->string('schoolname')->nullable();
            $table->string('schoolcategory')->nullable();
            $table->string('admissionnumber')->nullable();
            $table->string('joineddate')->nullable();
            $table->string('yearofadmission')->nullable();
            $table->string('durationofstudy')->nullable();
            $table->string('coursename')->nullable();
            $table->string('feesbalance')->nullable();
            $table->string('feesattachmentpath')->nullable();
            $table->string('admissionletterpath')->nullable();
            $table->string('latestresultspath')->nullable();
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
       Schema::dropIfExists('ngcdfbursaryapplication'); 
    }
}
