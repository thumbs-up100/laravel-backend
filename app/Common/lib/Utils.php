<?php
// +--------------------------------------------------------------------------------------------
// | When work is a pleasure, life is a joy!
// +--------------------------------------------------------------------------------------------
// | Company: LongTv | User: Jingyou Chen  |  Email:chenjingyou@long.tv  | Time:2019/12/10 17:19
// +--------------------------------------------------------------------------------------------
// | TITLE:
// +--------------------------------------------------------------------------------------------

namespace App\Common\lib;


use Illuminate\Support\Facades\Redis;

trait Utils
{
    /**
     * @param array $data
     * @param int $status
     * @param string $message
     * @param int $httpCode
     * @return \Illuminate\Http\Response
     */
    static public function response($data = [], $status = 1, $message = 'success', $httpCode = 200)
    {
        $aesObj = new Aes(env('AES_KEY'), env('AES_HEXIV'), env('AES_METHOD'));

        $data = $data ? $data : new \stdClass();

        $response = [
            'status' => $status,
            'msg' => $message,
            'data' => $aesObj->encrypt(json_encode($data))
        ];
        return response()->make($response);
    }

    /**
     * @param array $data
     * @param int $status
     * @param string $message
     * @param int $httpCode
     * @return mixed
     */
    static public function show($data = [], $status = 1, $message = 'success', $httpCode = 200)
    {
        $response = [
            'status' => $status,
            'msg' => $message,
            'data' => $data ? $data : new \stdClass()
        ];
        return response()->make($response);
    }

    /**
     * @param array $data
     * @param int $status
     * @param string $message
     * @param int $httpCode
     * @return mixed
     */
    static public function showJsonArray($data = [], $status = 1, $message = 'success', $httpCode = 200)
    {
        $response = [
            'status' => $status,
            'msg' => $message,
            'data' => $data
        ];
        return response()->make($response);
    }

    /**
     * @param int $status
     * @param string $message
     * @param int $httpCode
     * @return \Illuminate\Http\Response
     */
    static public function exceptionResponse($message = 'success', $status = 0, $httpCode = 500)
    {
        $response = [
            'status' => $status,
            'msg' => $message,
            'data' => (new \stdClass())
        ];
        return response()->make($response, $httpCode);
    }

    /**
     * @param $data
     * @param int $status
     * @param string $message
     * @return array
     */
    static public function formatData($data = [], $status = 1, $message = 'success')
    {
        return [
            'status' => $status,
            'msg' => $message,
            'data' => $data ? $data : new \stdClass()
        ];
    }
}
