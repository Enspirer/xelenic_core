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
            $table->string('status');
            $table->text('key');
            $table->timestamp('updated_at');
            $table->timestamp('created_at')->useCurrent();
        });

        Schema::create('cloud_api_data_table', function (Blueprint $table) {
            $table->bigIncrements('table_id');
            $table->text('table_name');
            $table->integer('user_id');
            $table->text('key');
            $table->integer('ab_id');
            $table->integer('status');
            $table->timestamp('updated_at');
            $table->timestamp('created_at')->useCurrent();
        });

        Schema::create('cloud_api_data_field', function (Blueprint $table) {
            $table->bigIncrements('data_field_id');
            $table->text('field_name');
            $table->text('type');
            $table->text('key');
            $table->integer('ab_id');
            $table->integer('status');
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
