<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppDownloadsCountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_downloads_count', function (Blueprint $table) {
            $table->id();
            $table->integer('app_id')->comment('应用id');
            $table->integer('download_num')->comment('下载数量');
            $table->index('app_id');
        });
        \Illuminate\Support\Facades\DB::statement("ALTER TABLE `app_downloads_count` comment '应用下载数量统计'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_downloads_count');
    }
}
