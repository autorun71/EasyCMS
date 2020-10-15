<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('site')->default('s1');
            $table->string('site_name')->default('EasyCMS');
            $table->string('url')->default('http://localhost');
            $table->string('sender_email')->default('robot@easy-cms.ru');
            $table->string('title')->default('#SITE_NAME# - Интернет магазин');
            $table->string('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('main');
    }
}
