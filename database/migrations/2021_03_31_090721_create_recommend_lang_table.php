<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecommendLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommends_lang', function (Blueprint $table) {
            $table->id();
            $table->integer('rec_id')->comment('推荐id');
            $table->integer('lang_id')->comment('语言id');
            $table->string('title', 50)->comment('推荐位名称');
            $table->index(['recommend_id', 'lang_id']);
        });
        \Illuminate\Support\Facades\DB::statement("ALTER TABLE `recommend_lang` comment '推荐内容语言表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recommend_lang');
    }
}
