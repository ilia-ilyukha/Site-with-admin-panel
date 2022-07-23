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

        if (!Schema::hasTable('tast_status')) {
            Schema::create('tast_status', function (Blueprint $table) {
                $table->string('id');
                $table->string('name');
            });
        }

        Schema::table('tasks', function (Blueprint $table) {
            $table->integer('status_id')->default(1);
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
        if (Schema::hasColumn('tasks', 'status_id')) {
            Schema::table('tasks', function ($table) {
                $table->dropColumn('status_id');
            });
        }
    }
}
