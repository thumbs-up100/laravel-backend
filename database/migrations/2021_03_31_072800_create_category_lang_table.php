<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_lang', function (Blueprint $table) {
            $table->integer('lang_id')->comment('语言id');
            $table->integer('category_id')->comment('分类id');
            $table->string('title', 50)->comment('语言分类名称');
            $table->primary(['category_id', 'lang_id']);
        });
        \Illuminate\Support\Facades\DB::statement("ALTER TABLE category_lang comment '分类语言表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_lang');
    }
}
