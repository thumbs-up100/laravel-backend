<?php
// +--------------------------------------------------------------------------------------------
// | When work is a pleasure, life is a joy!
// +--------------------------------------------------------------------------------------------
// | Company: Lem | User: Jingyou Chen  |  Email:chenjingyou@long.tv  | Time:2021/3/26 11:35
// +--------------------------------------------------------------------------------------------
// | TITLE:
// +--------------------------------------------------------------------------------------------

$api = app('Dingo\Api\Routing\Router');


$params = [
    'version' => 'v1',
    // 'domain' => 'admin.mydomain.com',
    'namespace' => 'App\\Http\\Controllers\\Api',
    // 'middleware' => 'api'
];

$api->group($params, function ($api) {
    $api->group(['namespace' => 'V1'], function ($api) {
        $api->get('home', 'home@showIndex');

    });
});

