<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Blog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('blog_title');
            $table->longText('body')->nullable();
            $table->string('thums_img');
            $table->string('user_id');
            $table->longText('description');
            $table->string('slug');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_table');
    }
}
