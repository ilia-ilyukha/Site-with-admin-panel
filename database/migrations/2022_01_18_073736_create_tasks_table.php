<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->char('title', 50);
            $table->char('assignee', 50);
            $table->string('description', 150);
            $table->integer('author_id');
            $table->integer('priority_id');
            $table->timestamps();
        });

        Schema::create('tasks_hours', function (Blueprint $table) {
            $table->id();
            $table->integer('task_id');
            $table->integer('assignee_id');
            $table->char('description', 50);
            $table->integer('quantity');
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
        Schema::dropIfExists('tasks');
        Schema::dropIfExists('tasks_hours');
    }
}
