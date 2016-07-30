<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('member_id')->unsigned()->index();
            $table->integer('project_id')->unsigned()->index();

            $table->string('name');
            $table->text('description')->nullable();
            $table->date('est_start_time');
            $table->date('est_end_time')->nullable();
            $table->timestamp('act_start_time')->nullable();
            $table->timestamp('act_end_time')->nullable();
            $table->timestamps();
            $table->integer('task_status_id')->unsigned()->index()->default(1);

            //unique(['name','member_id','project_id']);
            $table->foreign('member_id')->references('id')->on('members')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
            $table->foreign('project_id')->references('id')->on('projects')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
            $table->foreign('task_status_id')->references('id')->on('task_statuses')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tasks');
    }
}
