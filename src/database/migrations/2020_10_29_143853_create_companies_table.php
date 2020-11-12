<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('company_apply_id');
            $table->integer('company_id');
            $table->string('company_name');
            $table->string('company_service');
            $table->string('company_apply_job');
            $table->string('company_job_content');
            $table->string('company_job_skill');
            $table->integer('company_job_year');
            $table->integer('company_member_number');
            $table->integer('company_job_salary');
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
        Schema::dropIfExists('companies');
    }
}
