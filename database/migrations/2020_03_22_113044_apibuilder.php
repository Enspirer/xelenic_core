<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Apibuilder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cloud_api_builder', function (Blueprint $table) {
            $table->bigIncrements('ab_id');
            $table->text('app_name');
            $table->integer('user_id');
            $table->integer('app_type');
            $table->integer('tokeing');
            $table->integer('intence_count');
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
        Schema::dropIfExists('cloud_api_builder');

    }
}
