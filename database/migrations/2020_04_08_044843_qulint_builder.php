<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class QulintBuilder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qulint_pages', function (Blueprint $table) {
            $table->bigIncrements('q_id');
            $table->text('title');
            $table->integer('user_id');
            $table->integer('service_id');
            $table->integer('website_id');
            $table->text('type');
            $table->string('status');
            $table->text('custom_script_up')->nullable();
            $table->text('custom_script_down')->nullable();
            $table->text('slug')->nullable();
            $table->longText('body')->nullable();
            $table->timestamp('updated_at');
            $table->timestamp('created_at')->useCurrent();
        });

        Schema::create('websites', function (Blueprint $table) {
            $table->bigIncrements('website_id');
            $table->text('website_name');
            $table->integer('user_id');
            $table->integer('service_id');
            $table->text('type');
            $table->string('status');
            $table->integer('app_id')->nullable();
            $table->integer('home_page')->nullable();
            $table->text('key')->nullable();
            $table->text('description')->nullable();
            $table->integer('custom_url')->nullable();
            $table->timestamp('updated_at');
            $table->timestamp('created_at')->useCurrent();
        });


        Schema::create('scripts', function (Blueprint $table) {
            $table->bigIncrements('script_id');
            $table->integer('user_id');
            $table->integer('qulint_id');
            $table->integer('file_id')->nullable();
            $table->integer('service_id');
            $table->integer('cdn')->nullable();
            $table->string('position');
            $table->timestamp('updated_at');
            $table->timestamp('created_at')->useCurrent();
        });

        Schema::create('qulint_templates', function (Blueprint $table) {
            $table->bigIncrements('template_id');
            $table->text('template_name');
            $table->text('description');
            $table->integer('user_id');
            $table->integer('service_id');
            $table->text('script_header')->nullable();
            $table->text('script_footer')->nullable();
            $table->longText('body')->nullable();
            $table->text('key');
            $table->text('type');
            $table->string('category');
            $table->timestamp('updated_at');
            $table->timestamp('created_at')->useCurrent();
        });

        Schema::create('template_script', function (Blueprint $table) {
            $table->bigIncrements('template_id');
            $table->text('file_id');
            $table->text('file_type');
            $table->integer('user_id');
            $table->text('position');
            $table->integer('order');
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
        Schema::dropIfExists('qulint_pages');
        Schema::dropIfExists('scripts');
        Schema::dropIfExists('websites');
        Schema::dropIfExists('qulint_templates');
        Schema::dropIfExists('template_script');
    }
}
