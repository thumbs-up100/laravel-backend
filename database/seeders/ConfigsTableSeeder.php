<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConfigsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('configs')->delete();
        
        \DB::table('configs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '富文本编辑器',
                'key' => 'RICH_TEXT_EDITOR',
                'value' => 'neditor',
                'type' => 1,
                'group' => '系统',
                'remark' => '系统富文本编辑器类型。有效设置值：neditor、ueditor。',
                'created_at' => '2019-09-16 10:02:46',
                'updated_at' => '2019-09-17 09:37:17',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '行内表单展示数',
                'key' => 'FORM_INLINE_NUM',
                'value' => '5',
                'type' => 0,
                'group' => '系统',
                'remark' => '',
                'created_at' => '2019-09-16 10:19:01',
                'updated_at' => '2019-09-16 10:19:01',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '语言',
                'key' => 'LOCAL',
                'value' => 'zh',
                'type' => 1,
                'group' => '',
                'remark' => '多语言切换',
                'created_at' => NULL,
                'updated_at' => '2021-03-30 06:16:04',
            ),
        ));
        
        
    }
}