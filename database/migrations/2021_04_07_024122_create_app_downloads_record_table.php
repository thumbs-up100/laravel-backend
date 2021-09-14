<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppDownloadsRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_downloads_record', function (Blueprint $table) {
            $table->id();
            $table->integer('app_id')->comment('应用id');
            $table->string('title', 64)->comment('应用名称');
            $table->string('mac', 64)->comment('mac');
            $table->string('version', 20)->comment('版本号');
            $table->timestamp('create_at')->comment('创建时间');
            $table->index(['app_id', 'mac']);
        });
        \Illuminate\Support\Facades\DB::statement("ALTER TABLE `app_downloads_record` comment '应用下载记录'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_downloads_record');
    }
}
