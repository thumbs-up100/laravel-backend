<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_info', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50)->comment('名称');
            $table->string('package_name', 128)->comment('包名');
            $table->text('introduction')->comment('介绍');
            $table->decimal('score', 2, 1)->comment('评分');
            $table->string('developer', 64)->comment('开发者名称');
            $table->string('contact_information', 32)->comment('联系方式');
            $table->string('website', '128')->comment('网站');
            $table->string('square_img', 128)->comment('方型图标');
            $table->string('banner_img', '128')->comment('banner图标');
            $table->string('background_img', 128)->comment('背景');
            $table->json('screenshot_img')->comment('截图');
            $table->tinyInteger('mouse_env')->default(0)->comment('支持鼠标');
            $table->tinyInteger('hand_shank_env')->default(0)->comment('支持手柄');
            $table->tinyInteger('google_frame_env')->default(0)->comment('google框架');
            $table->tinyInteger('status')->default(0)->comment('状态1上架0下架');
            $table->timestamps();
            $table->index('title');
        });
        \Illuminate\Support\Facades\DB::statement("ALTER TABLE `app_info` COMMENT '应用信息表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_info');
    }
}
