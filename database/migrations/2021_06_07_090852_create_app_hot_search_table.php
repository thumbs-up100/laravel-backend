<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppHotSearchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_hot_search', function (Blueprint $table) {
            $table->id();
            $table->integer('app_id')->comment('应用ID');
            $table->tinyInteger('sort')->default(0)->comment('排序号');
            $table->timestamps();
            $table->index(['app_id', 'sort']);
        });
        \Illuminate\Support\Facades\DB::statement("ALTER TABLE `app_hot_search` comment '热门搜索'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_hot_search');
    }
}
