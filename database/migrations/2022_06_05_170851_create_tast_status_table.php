<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTastStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tast_status', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::table('tasks', function ($table) {
            $table->integer('status_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tast_status');
        Schema::table('tasks', function ($table) {
            $table->dropColumn('status_id');
        });
    }
}