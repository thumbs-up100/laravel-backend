<?php

namespace App\Common\lib;

use App\Common\lib\Aes;
use Illuminate\Support\Facades\Redis;

/**
 * Iauth相关
 * Class IAuth
 */
class IAuth
{

    /**
     * 生成每次请求的sign
     * @param array $data
     * @return string
     */
    public static function setSign($data)
    {//setSign($data = []) {
        // 1 按字段排序
        ksort($data);
        // 2拼接字符串数据  &
        $string = http_build_query($data);
        // 3通过aes来加密
        $string = (new Aes())->encrypt($string);

        return $string;
    }

    /**
     * 检查sign是否正常
     * @param array $data
     * @param $data
     * @return boolen
     */
    public static function checkSignPass($data)
    {
        $str = (new Aes())->decrypt($data['sign']);
        if (empty($str)) {
            return false;
        }

        parse_str($str, $arr);
        /*
        if(!config('app_debug')) {
             if ((time() - ceil($arr['time'] / 1000)) > config('app.app_sign_time')) {
                 return false;
             }
             // 唯一性判定
             // if (Cache::get($data['sign'])) {
             //     return false;
             // }

             // 销毁缓存
             // Cache::rm($data['sign']);
         }
        */
        return $arr['mac'];
    }

    /**
     * 验证sign
     * @param $data
     * @return bool
     */
    public static function verifySign($data)
    {
        $aesObj = new Aes(env('AES_KEY'), env('AES_HEXIV'), env('AES_METHOD'));

        $str = $aesObj->decrypt($data);

        if (empty($str)) {
            return false;
        }

        parse_str($str, $arr);

        return $arr;
    }
}
