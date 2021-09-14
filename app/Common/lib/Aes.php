<?php

namespace App\Common\lib;

/**
 * aes 加密 解密类库
 * @by oo
 * Class Aes
 * @package app\common\lib
 */
class Aes
{

    private $key = null;
    private $iv = null;
    private $method = null;

    /**
     * AesCommon constructor.
     * @param $aesKey
     * @param $aesIv
     * @param $method
     */
    public function __construct($aesKey, $aesIv, $method)
    {
        $this->key = $aesKey;
        $this->iv = $aesIv;
        $this->method = $method;
    }

    /**
     * 加密
     * @param String input 加密的字符串
     * @param String key   解密的key
     * @return HexString
     */
    public function encrypt($input = '')
    {
        return openssl_encrypt($input, $this->method, $this->key, 0, $this->iv);
    }

    /**
     * 解密
     * @param String input 解密的字符串
     * @param String key   解密的key
     * @return String
     */
    public function decrypt($sStr)
    {
        // 解密
        return openssl_decrypt($sStr, $this->method, $this->key, 0, $this->iv);
    }

}
