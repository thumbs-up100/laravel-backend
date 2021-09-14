<?php

namespace app\common\lib;

class Http
{

    //CURL 获此网页内容
    static function curl_get_contents($url, $data = array(), $https = false)
    {
        $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'curl';
        $curl = curl_init();                                // 启动一个CURL会话


        if (!empty($data) && is_array($data)) {
            curl_setopt($curl, CURLOPT_POST, 1);                        // 发送一个常规的Post请求
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);                // Post提交的数据包
        }
        if ($https) {
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);                // 对认证证书来源的检查
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);                // 从证书中检查SSL加密算法是否存在
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);                // 使用自动跳转
        }

        curl_setopt($curl, CURLOPT_URL, $url);                        // 要访问的地址
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);                    // 设置超时限制防止死循环
        curl_setopt($curl, CURLOPT_HEADER, 0);                        // 显示返回的Header区域内容
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);                // 获取的信息以文件流的形式返回
        curl_setopt($curl, CURLOPT_USERAGENT, $user_agent);            // 模拟用户使用的浏览器
        curl_setopt($curl, CURLOPT_AUTOREFERER, 1);                // 自动设置Referer

        $results = curl_exec($curl);                        // 执行操作

        if (curl_errno($curl)) {
            $results = curl_error($curl);                    //捕抓异常
        }

        curl_close($curl);                                                // 关闭CURL会话

        return $results;                                                // 返回数据

    }

    // CURL https post 方式提交数据
    static function curl_https_post($url, $data)
    {
        return self::curl_get_contents($url, $data, true);
    }


    // CURL https get 方式获取网页
    static function curl_https_get($url)
    {
        return self::curl_get_contents($url, array(), true);
    }


    // CURL https post 方式提交数据
    static function curl_http_post($url, $data = array())
    {
        return self::curl_get_contents($url, $data, false);
    }

    // CURL https get 方式获取网页
    static function curl_http_get($url)
    {
        return self::curl_get_contents($url, array(), true);
    }


    static function http_post_data($url, $data_string)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json; charset=utf-8',
                'Content-Length: ' . strlen($data_string))
        );
        ob_start();
        curl_exec($ch);
        $return_content = ob_get_contents();
        //echo $return_content."<br>";
        ob_end_clean();

        $return_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        //  return array($return_code, $return_content);
        return $return_content;
    }

    # 华曦达post data
    static function http_post_json_data($url, $data_string, $header)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        ob_start();
        curl_exec($ch);
        $return_content = ob_get_contents();
        //echo $return_content."<br>";
        ob_end_clean();

        $return_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        //  return array($return_code, $return_content);
        return $return_content;
    }
}