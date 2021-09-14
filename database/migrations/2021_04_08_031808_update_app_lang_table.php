<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAppLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('app_lang', function (Blueprint $table) {
            $table->string('first_letter_of_pinyin', 64)->after('title')->comment('拼音首字母');
            $table->string('pinyin', 128)->after('first_letter_of_pinyin')->comment('拼音');
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
