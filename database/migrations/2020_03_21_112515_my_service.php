<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MyService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_service', function (Blueprint $table) {
            $table->bigIncrements('my_service_id');
            $table->text('service_name');
            $table->integer('service_id');
            $table->integer('user_id');
            $table->integer('status');
            $table->integer('intence_count');
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
        Schema::dropIfExists('my_service');
    }
}
