<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->string("timestamp");
            $table->string("permission");
            $table->string("gender");
            $table->string("postal_code");
            $table->string("education");
            $table->string("education_institution");
            $table->float("years_of_experience");
            $table->string("employment_commitment");
            $table->string("employment_type");
            $table->string("job_category");
            $table->unsignedMediumInteger("monthly_salary")->nullable();
            $table->longText("job_title")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salaries');
    }
};
