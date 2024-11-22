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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('number')->nullable();
            $table->string('password');
            $table->string('profile_created_by');
            $table->string('gender')->nullable();
            $table->string('candidate_name')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('religon')->nullable();
            $table->string('nationality')->nullable();
            $table->string('no_of_chlidren')->nullable();
            $table->string('highest_qualification')->nullable();
            $table->longText('education_details')->nullable();
            $table->string('working_sector')->nullable();
            $table->string('profession')->nullable();
            $table->longText('profession_details')->nullable();
            $table->string('monthly_income')->nullable();
            $table->string('keep_it_private')->nullable();
            $table->string('father_status')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('mother_status')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('bro_not_married')->nullable();
            $table->string('bro_married')->nullable();
            $table->string('sis_not_married')->nullable();
            $table->string('sis_married')->nullable();
            $table->string('home_division')->nullable();
            $table->string('currently_living_in')->nullable();
            $table->string('city_living_in')->nullable();
            $table->longText('family_details')->nullable();
            $table->string('guardian_mobile')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('body_type')->nullable();
            $table->string('complexion')->nullable();
            $table->string('blood_group')->nullable();
            $table->longText('physical_attibute_details')->nullable();
            $table->string('religious_value')->nullable();
            $table->string('family_values')->nullable();
            $table->string('diet')->nullable();
            $table->string('smoke')->nullable();
            $table->longText('write_about_yourself')->nullable();
            $table->string('image')->nullable();
            $table->string('partner_gender')->nullable();
            $table->string('age_from')->nullable();
            $table->string('age_to')->nullable();
            $table->string('height_from')->nullable();
            $table->string('height_to')->nullable();
            $table->string('partner_marital_status')->nullable();
            $table->string('partner_bodytype')->nullable();
            $table->string('partner_complexion')->nullable();
            $table->string('partner_education')->nullable();
            $table->string('partner_profession')->nullable();
            $table->string('partner_working_sector')->nullable();
            $table->string('email_verified_at')->nullable();
            $table->string('username')->nullable();
            $table->string('pay_active')->nullable();
            $table->string('addedby_id')->nullable();
            $table->string('editedby_id')->nullable();
            $table->string('final_check')->nullable();
            $table->string('package')->nullable();
            $table->string('expired_at')->nullable();
            $table->string('user_type')->nullable();
            $table->string('mobile_verified')->nullable();
            $table->string('email_verify_code')->nullable();
            $table->string('sms_count')->nullable();
            $table->string('password_temp')->nullable();
            $table->string('loggedin_at')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
