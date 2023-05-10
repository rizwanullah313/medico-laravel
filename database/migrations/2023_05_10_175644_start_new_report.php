<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
         Schema::create('start_New_Report', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('case_select')->nullable();
            $table->string('agency')->nullable();
            $table->string('solicator')->nullable();
            $table->string('medco_ref')->nullable();
            $table->string('agency_ref')->nullable();
            $table->string('medco_patient')->nullable();
            $table->string('solicator_ref')->nullable();
            $table->string('title')->nullable();
            $table->string('forename')->nullable();
            $table->string('dob')->nullable();
            $table->string('corr_email')->nullable();
            $table->string('gender')->nullable();
            $table->string('surname')->nullable();
            $table->string('address')->nullable();
            $table->string('postcode')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('data_of_accident')->nullable();
            $table->string('hospital_record_need_tobe_reviewed')->nullable();
            $table->string('gp_record_need_tobe_reviewed')->nullable();
            $table->string('accident_circumstances')->nullable();
            $table->string('any_special_note')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('users');

    }
};
