<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Service extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cloud_service', function (Blueprint $table) {
            $table->bigIncrements('service_id');
            $table->text('service_name');
            $table->text('service_author');
            $table->text('payment_status');
            $table->longText('service_description');
            $table->text('service_url');
            $table->text('service_provider');
            $table->text('cover_image');
            $table->text('icon_image');
            $table->text('service_price')->nullable();
            $table->text('token')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });

        Schema::create('cloud_service_wiki', function (Blueprint $table) {
            $table->bigIncrements('service_wiki_id');
            $table->text('service_id');
            $table->text('title');
            $table->text('order_number');
            $table->longText('article_body');
            $table->text('is_publish');
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
        Schema::dropIfExists('cloud_service');
        Schema::dropIfExists('cloud_service_wiki');
    }
}
