<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class Languages extends Model
{
    use HasFactory;

    //
    public function getLanguageId($lang)
    {
        $lang = strtolower($lang ?: env('LANG'));

        $langId = Redis::get('lang:' . $lang);
        if ($langId) {
            return $langId;
        }
        // DB::enableQueryLog();
        $langId = $this->whereJsonContains('locale', $lang)->value('id') ?: env('LANG_ID');
        //dd(DB::getQueryLog());

        Redis::set('lang:' . $lang, $langId);

        return $langId;
    }

    public function languages()
    {
        $data = $this->get()->toArray();
        array_unshift($data, [
            'id' => 0,
            'title' => '全部'
        ]);
        return $data;
    }

    // 语言初始化
    public function init()
    {
        $array = [
            [1, '简体中文', 'zh-cn', 'zh-CN,zh-CN.UTF-8,zh-cn,cn,zh,zh_CN,zh_cn,zh-', '', '', 1, 1, 'CN_zh'],
            [4, 'English', 'en-us', 'US-en,en,en-US,en-us', '', '', 2, 1, 'US_en'],
            [9, '德语', 'de-DE', 'de-DE,de-de,de', '', '', 7, 1, ''],
            [15, '韩语', 'ko-KR', 'ko-KR,ko-kr,ko', '', '', 4, 1, ''],
            [7, '越南语', 'vi-VN', 'vi-VN,vi-vn,vi', '', '', 10, 1, ''],
            [8, '日语', 'ja-JP', 'ja-JP,ja-jp,ja', '', '', 6, 1, ''],
            [16, '马来语', 'ms-MY', 'ms-MY,ms-my,ms', '', '', 3, 1, ''],

            [10, '印度尼西亚语', 'in-ID', 'in-ID,in-id,in', '', '', 8, 1, ''],

            [11, '繁体', 'zh-TW', 'zh-tw,tw', '', '', 5, 1, ''],

            [14, '法语', 'fr-FR', 'fr-FR,fr-fr,fr', '', '', 9, 1, ''],

            [17, '葡萄牙', 'pt-PT', 'pt-pt', '', '', 11, 1, ''],

            [18, '西班牙', 'es-ES', 'es-es', '', '', 10, 1, ''],

            [19, '意大利', 'it-IT', 'it-it', '', '', 10, 1, ''],

            [20, '俄罗斯', 'ru-RU', 'ru-ru', '', '', 10, 1, ''],

            [21, '印度语', 'hi-IN', 'hi-in', '', '', 10, 1, ''],

            [22, '泰国', 'th-TH', 'th-th', '', '', 10, 1, ''],

            [23, '阿拉伯语', 'ar-IL', 'ar-IL', '', '', 10, 1, NULL],
        ];


        foreach ($array as $key => $value) {
            $insert[] = [
                'id' => current($value),
                'title' => next($value),
                'locale' => json_encode(explode(',', $value[3])),
                'image' => ''
            ];
        }
        $res = $this->insert($insert);
        dd($res);
    }
}
