<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_lang', function (Blueprint $table) {
            $table->integer('app_id')->comment('应用id');
            $table->integer('lang_id')->comment('语言id');
            $table->string('title', 50)->comment('应用名称');
            $table->text('introduction')->comment('介绍');
            $table->primary(['lang_id', 'app_id']);
        });
        \Illuminate\Support\Facades\DB::statement("ALTER TABLE `app_lang` comment '应用语言描述表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_lang');
    }
}
