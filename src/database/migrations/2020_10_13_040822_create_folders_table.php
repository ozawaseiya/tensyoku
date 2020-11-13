<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('company_apply_id');
            $table->string('sender_name');
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('company_id')->nullable();
            $table->timestamps();

            // 外部キーを設定する
            $table->foreign('company_id')->references('id')->on('admins');
            // 外部キーを設定する
            $table->foreign('user_id')->references('id')->on('users');
            // 外部キーを設定する
            $table->foreign('company_apply_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('folders');
    }
}
