<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAppVersionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('app_version', function (Blueprint $table) {
            $table->string('package_size', 10)->after('version')->comment('包大小');
            $table->char('package_md5_value', 32)->after('package_size')->comment('应用包md5值');
            $table->string('app_url', 255)->after('package_size')->comment('应用下载链接');
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
    }
}
