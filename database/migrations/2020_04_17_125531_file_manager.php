<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FileManager extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_manager', function (Blueprint $table) {
            $table->bigIncrements('file_id');
            $table->text('file_name');
            $table->integer('user_id');
            $table->text('size');
            $table->text('file_type');
            $table->text('description')->nullable();
            $table->text('tag')->nullable();
            $table->timestamp('updated_at');
            $table->timestamp('created_at')->useCurrent();
        });

        Schema::create('file_permission', function (Blueprint $table) {
            $table->bigIncrements('permission_id');
            $table->text('file_id');
            $table->integer('user_id');
            $table->text('description')->nullable();
            $table->timestamp('updated_at');
            $table->timestamp('created_at')->useCurrent();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('file_manager');
        Schema::dropIfExists('file_permission');
    }
}
