<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatusTaskPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_task', function (Blueprint $table) {
            $table->unsignedBigInteger('status_id')->index();
            $table->foreign('status_id')->references('id')->on('status')->onDelete('cascade');
            $table->unsignedBigInteger('task_id')->index();
            $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->primary(['status_id', 'task_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_task');
    }
}
