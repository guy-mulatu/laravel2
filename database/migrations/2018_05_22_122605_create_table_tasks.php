<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->references('id')->on('users');
            $table->string('title');
            $table->timestamp('created_at')->nullable();
            $table->text('description')->nullable();
            $table->text('comments')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->boolean('completed')->nullable();
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
    }
}
