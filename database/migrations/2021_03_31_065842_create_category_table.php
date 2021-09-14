<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50)->comment('分类名称');
            $table->tinyInteger('sort')->comment('排序');
            $table->tinyInteger('status')->comment('状态');
            $table->string('image', 255)->comment('图标');
            $table->timestamps();
            $table->index('title');
        });
        \Illuminate\Support\Facades\DB::statement("ALTER TABLE `category` comment '分类表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}
