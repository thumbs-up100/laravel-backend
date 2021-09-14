<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecommendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommends', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50)->comment('推荐位名称');
            $table->tinyInteger('sort')->comment('排序号');
            $table->tinyInteger('status')->comment('状态');
            $table->json('channels')->comment('渠道');
            $table->json('languages')->comment('语言');
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
        Schema::dropIfExists('recommend');
    }
}
