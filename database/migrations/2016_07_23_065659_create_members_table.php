<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('email',100)->unique();
            $table->string('password',100);
            $table->rememberToken();
            $table->string('contact',100)->nullable();
            $table->string('current_designation',100)->nullable();
            $table->string('photo',100)->nullable();
            $table->integer('status_id')->unsigned()->index();
            $table->timestamps();


            $table->foreign('status_id')->references('id')->on('statuses')
                  ->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('members');
    }
}
