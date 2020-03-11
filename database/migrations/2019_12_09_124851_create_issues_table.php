<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('description');
            $table->integer('type')->nullable($value = true)->default('0');
            $table->integer('dept_id')->nullable($value = true)->default('0');
            $table->integer('state')->nullable($value = true)->default('0');
            $table->integer('user_id')->nullable($value = true)->default('0');
            $table->integer('assigned_to')->nullable($value = true)->default('0');
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
        Schema::dropIfExists('issues');
    }
}
