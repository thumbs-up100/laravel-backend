<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_category', function (Blueprint $table) {
            $table->id();
            $table->integer('app_id')->comment('应用id');
            $table->integer('category_id')->comment('分类id');
            $table->index(['category_id', 'app_id']);
        });
        \Illuminate\Support\Facades\DB::statement("ALTER TABLE `app_category` comment '应用分类表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_category');
    }
}
