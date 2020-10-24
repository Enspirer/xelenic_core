<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leeds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('type');
            $table->text('service_name')->nullable();
            $table->text('user_id')->nullable();
            $table->text('error_msg')->nullable();
            $table->text('message')->nullable();
            $table->text('email');
            $table->text('status');
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
        Schema::dropIfExists('leeds');
    }
}
