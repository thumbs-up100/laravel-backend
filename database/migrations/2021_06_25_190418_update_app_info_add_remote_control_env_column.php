<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAppInfoAddRemoteControlEnvColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('app_info', function (Blueprint $table) {
            $table->tinyInteger('remote_control_env')->after('google_frame_env')->default(0)->comment('支持遥控器');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('app_info', function (Blueprint $table) {
            $table->dropColumn('remote_control_env');
        });
    }
}
